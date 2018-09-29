<?php
include("../User/db_config.php");
//include("../PhpLinq/Classes/PHPLinq/LinqToObjects.php");

set_include_path(get_include_path() . PATH_SEPARATOR . '../PhpLinq/Classes/');
require_once('PHPLinq/LinqToObjects.php');

$trainingSet= array(array());
$normalizeMap = array(array());
$coEfficientSet=array();

if(isset($_POST['cat_id']) && isset($_POST['month_id'])) {
    $cat_id = (int)mysql_real_escape_string($_POST['cat_id']);
    $month_id = (int)mysql_real_escape_string($_POST['month_id']);
    populateTrainingSet($cat_id);
    featureScaling();
    initializeCoEfficientSet();
    estimateCost();
    performAlgorithm($cat_id, $month_id);
}


function populateTrainingSet($cat_id)
{
    $sql = "select pro_id,month,total_price,total_quantity,avg_rating,brand_id from monthly_stat where cat_id =" . $cat_id;
    $res = mysql_query($sql);
    
    if(mysql_num_rows($res) > 0) {
        $i=0;
        $dataSet = array(array());
             
        while ($row = mysql_fetch_object($res)) {
            $pro_id = $row->pro_id;
            $month = $row->month;
            $price = (float) $row->total_price / (int) $row->total_quantity;
            $quantity = $row->total_quantity;
            $rating = $row->avg_rating;
            $brand_id = $row->brand_id;
            
            
            $dataSet[$i][0] = $pro_id;
            $dataSet[$i][1] = $month;
            $dataSet[$i][2] = $price;
            $dataSet[$i][3] = $rating;
            $dataSet[$i][4] = $brand_id;
            $dataSet[$i][5] = $quantity;

            $i++;
        }
        $GLOBALS['trainingSet'] = $dataSet; 
    }    
}

function featureScaling()
{
    $localSet = $GLOBALS['trainingSet'];
    calculateMaxMin($localSet);
    $normalizeMap = $GLOBALS['normalizeMap'];
    
    for($i = 0; $i < count($localSet); $i++){
        for($j = 0; $j < 5; $j++){
        $previousElement = $localSet[$i][$j];
        $newElement = (float)($previousElement - $normalizeMap[$j][0]) / ($normalizeMap[$j][1] - $normalizeMap[$j][0]);
        $localSet[$i][$j] = $newElement;
        }
    }
    
    $GLOBALS['trainingSet'] = $localSet;
}

function calculateMaxMin($trainingSet)
{
    $tempMaxMin = array(array());
    
    for($column = 0; $column < 5; $column++){
        $max = -100000.0;
        $min = 100000.0;

        for($i = 0; $i < count($trainingSet); $i++){
            if($trainingSet[$i][$column] < $min){
                $min = $trainingSet[$i][$column];
            }

            if($trainingSet[$i][$column] > $max){
                $max = $trainingSet[$i][$column];
            }
        }
        $tempMaxMin[$column][0] = $min;
        $tempMaxMin[$column][1] = $max;
    }
    
    $GLOBALS['normalizeMap'] = $tempMaxMin;
}

function initializeCoEfficientSet()
{
    $coEffSet = array();
    for($i=0; $i < 6; $i++){
        $coEffSet[$i] = rand(0, 9) * 0.1 + 0.1;
    }
    
    $GLOBALS['coEfficientSet'] = $coEffSet;
}

function estimateCost()
{
    $coEffSet = $GLOBALS['coEfficientSet'];
    $trainingSet = $GLOBALS['trainingSet'];
    $numberOfIteration = 1;
    $delThetas = array();
    
    for($i=0; $i < count($coEffSet); $i++){
            $delThetas[$i] = 100.0;
    }
    
    while($numberOfIteration <= 1000)
    {
        $loopController = from('$delTheta')->in($delThetas)->any('$delTheta => $delTheta > 0.0001');
        
        if($loopController == 0)
        {
            break;
        }
        else
        {
            //echo "Step-" . $numberOfIteration . ": " . $coEffSet;
            for($i = 0; $i < 6; $i++){
                $previousElement = $coEffSet[$i];
                $newElement = $previousElement - (pow(10,-50) / count($trainingSet)) * calculatePartialDerivation($i);
                $coEffSet[$i] = $newElement; 
                $delThetas[$i] = abs($newElement - $previousElement);
            }

            //echo "Del thetas: " . $delThetas[0] . "," . $delThetas[1] . "," . $delThetas[2] . "," . $delThetas[3] . "," . $delThetas[4] . "," . $delThetas[5] . "\r\n";
            $numberOfIteration++;
        }
    }
    
    $GLOBALS['coEfficientSet'] = $coEffSet;
}

function calculatePartialDerivation($k)
{
    $result = 0.0;
    $trainingSet = $GLOBALS['trainingSet'];
    $coEffSet = $GLOBALS['coEfficientSet'];

    for($i = 0; $i < count($trainingSet); $i++){
        for ($j = 0; $j < 6; $j++) {
            if ($j == 0) 
            {
                $result += $coEffSet[$j];
            } else 
            {
                $result += $trainingSet[$i][$j] * $coEffSet[$j];
            }
        }
        $result -= $trainingSet[$i][5];
        $result *= $trainingSet[$i][$k];
    }

    return $result;
}

function performAlgorithm($cat_id, $month_id)
{
    $normalizeMap = $GLOBALS['normalizeMap'];
    $sql = "select id,name,price,brand_id,rating from products where category =" . $cat_id;
    $res = mysql_query($sql);
    
    if (mysql_num_rows($res) > 0) {
        $i = 0;
        echo "<input type='hidden' id='numberOfPro' name='numberOfPro' value='" . mysql_num_rows($res) . "'/>";
        while($row = mysql_fetch_object($res)) {
            $pro_id = (int)$row->id;
            $pro_name = $row->name;
            $month = $month_id;
            $price = (float)$row->price;
            $brand_id = $row->brand_id;
            $rating = $row->rating;
            
            $dataSet = array();
            
            $month = (float)($month - $normalizeMap[1][0]) / ($normalizeMap[1][1] - $normalizeMap[1][0]);
            $price = (float)($price - $normalizeMap[2][0]) / ($normalizeMap[2][1] - $normalizeMap[2][0]);
            $rating = (float)($rating - $normalizeMap[3][0]) / ($normalizeMap[3][1] - $normalizeMap[3][0]);
            $brand_id = (float)($brand_id - $normalizeMap[4][0]) / ($normalizeMap[4][1] - $normalizeMap[4][0]);
            
            $dataSet[0] = (float)($pro_id - $normalizeMap[0][0]) / ($normalizeMap[0][1] - $normalizeMap[0][0]);;
            $dataSet[1] = $month;
            $dataSet[2] = $price;
            $dataSet[3] = $rating;
            $dataSet[4] = $brand_id;
            
            $quantity = round(calculateSale($dataSet));
            if($quantity < 0)
            {
                $quantity = 0;
            }
                      
            echo "<tr>" .
                    "<td id='pro_id_" . $i . "' style='text-align: center'>" . $pro_id . "</td>" .
                    "<td id='pro_name_" . $i . "' style='text-align: center'>" . $pro_name . "</td>" .
                    "<td id='quantity_" . $i . "' style='text-align: center'>" . $quantity . "</td>" .
                 "</tr>";
            $i++;
        }
    }
}

function calculateSale($dataSet)
{
    $result = 0.0;
    $coEffSet = $GLOBALS['coEfficientSet'];
    for($i = 0; $i < count($coEffSet); $i++){
         if($i == 0)
         {
             $result += $coEffSet[$i];
         }
         else
         {
             $result += $coEffSet[$i] * $dataSet[$i-1];
         }   
    }
    return $result;
}
?>

