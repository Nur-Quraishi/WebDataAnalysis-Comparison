<?php
include 'header.php';
include '../User/db_config.php';
?>

<?php


?>

<h2>Product Prediction</h2>
<form method="post" action="" enctype='multipart/form-data'>
    
   
    <div class="form-group">
        <label for="category">Category:</label>
       
        <select name="category"class="form-control" id="category">
            <option value=''>Select Category</option>
            <?php 
                $sql = "select * from `product_category` where parent_cat IS NULL";
                $res = mysql_query($sql);
                echo "$res";
                if(mysql_num_rows($res) > 0) {
                  while($row = mysql_fetch_object($res)) {
                    echo "<option value='".$row->id."'>".$row->name."</option>";
                  }
                }
            ?>
        </select>
        
    </div>
    <div class="form-group">
        <label for="sub_category">Sub-Category:</label>
        
        <select name="sub_category" class="form-control" id="sub_category">
            <option value=''>Select Sub-Category</option>
        </select>
        
    </div>
    <div class="form-group">
        <label for="month_id">Month:</label>
        
        <select name="month_id" class="form-control" id="month_id">
            <option value=''>Select Month</option>
            <option value='1'>January</option>
            <option value='2'>February</option>
            <option value='3'>March</option>
            <option value='4'>April</option>
            <option value='5'>May</option>
            <option value='6'>June</option>
            <option value='7'>July</option>
            <option value='8'>August</option>
            <option value='9'>September</option>
            <option value='10'>October</option>
            <option value='11'>November</option>
            <option value='12'>December</option> 
        </select>
        
    </div>
    
    
    
    <div class="form-group text-center">
        <input class="btn btn-lg btn-success" type='button' value='Predict' id="predict_btn" name='predict_btn'>
    </div>
</form>

<div class="col-12" id="hiddenDiv" style="display: none">
    <div class="card">

        <div class="card-body">
            <div>
                <table id="predictionTable" class="table table-bordered table-hover table-striped">

                    <thead>
                        <tr>
                            <th colspan="3" style="text-align: center;">
                                Prediction Table
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center">Product ID</th>
                            <th style="text-align: center">Product Name</th>
                            <th style="text-align: center">Predicted Sales</th>
                        </tr>
                    </thead>

                    <tbody id="tableData">
                    </tbody>
                </table>
            </div>
            <div class="form-group text-center">
                <input class="btn btn-lg btn-info" type='button' value='Generate Graph' id="graph_btn" name='graph_btn'>
            </div>

            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- /.card-body -->
</div>

<?php
include 'footer.php';
?>

<script type="text/javascript">
    $(document).on("change", "#category", function(){
        var cat_id = $(this).val();
        if(cat_id != "") {
            $.ajax({
              url:"../Common/get-sub_cat.php",
              data:{cat_id:cat_id},
              type:'POST',
              success:function(response) {
                var resp = $.trim(response);
                $("#sub_category").html(resp);
              }
            });
        }else {
            $("#sub_category").html("<option value=''>Select Sub-Category</option>");
        }
    });
    
    $(document).on("click", "#predict_btn", function(){
        var cat_id = $("#sub_category").val();
        var month_id = $("#month_id").val();
        
        if(cat_id != "" && month_id != "") {
            $.ajax({
              url:"../Common/gradientDescent.php",
              data:{cat_id: cat_id, month_id: month_id},
              type:'POST',
              success:function(response){
                $("#tableData").html(response);
                $("#hiddenDiv").show();
              }
            });
        }
    });
    
    $(document).on("click", "#graph_btn", function(){
        var chart = new CanvasJS.Chart("chartContainer",
            {
                data: [
                    {
                      type: "column",
                      dataPoints: []
                    }
                ]
            });
            
            
            for(var i=0; i < $('#numberOfPro').val(); i++)
            {
                chart.options.data[0].dataPoints[i] = {
                    label : $('#pro_name_' + i).html(),
                    y : Number($('#quantity_' + i).html())
                }
            }
            chart.render();
    });
</script>