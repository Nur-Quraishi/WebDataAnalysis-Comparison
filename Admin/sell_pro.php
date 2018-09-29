<?php
include './header.php';
include '../User/db_config.php';
?>

<h1>----Sell Products---- </h1>
<form  method="post" action="">
          
          
          <?php
                if (isset($_POST['submit'])) {
                    $pro_name= $_POST['pro_name'];
                    $price = $_POST['price'];
                    $date = $_POST['quant'];
                    

                    

                        $insert = mysql_query("INSERT INTO sell_pro(id,name,price,quant) VALUES('','$pro_name','$price','$date')");
                        if ($insert) {
                            echo "Your Registration is successfully.";
                        
                        }
 else {
                            echo 'not';
 }
                    
                } 
                ?>
          
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Product name" name="pro_name">
          <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="price" class="form-control" placeholder="Price" name="price">
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Quantity" name="quant">
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Add Sell</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

<?php
include './footer.php';
?>

