<?php
include 'header.php';
include '../User/db_config.php';
?>

<div class="col-md-10 col-md-offset-1">
    <div class="card card-plain">
        <div class="header">
            <h4 class="title"> product View </h4>

        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-bordered table-hover">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Delete</th>

                </thead>

                <?php
                $x = 1;
                $select = mysql_query("SELECT * FROM products");
                while ($fetch = mysql_fetch_array($select)) {
                    ?>
                    <thead>  
                    <th><?php echo $x++; ?></th>
                    <th><?php echo $fetch['name']; ?></th>
                    <th><?php echo $fetch['price']; ?></th>
                    <th><a href="<?php echo $fetch['image']; ?>" target="blank"><img src="<?php echo $fetch['image']; ?>" style="width: 90px; height: 50px;"></a></th>
                    <th><?php echo $fetch['quantity']; ?></th>
                    <th><a href="delete_pro.php?delete=<?php echo $fetch['id']; ?>">Delete</a></th>
                    </thead>
                <?php } ?>
            </table>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>