<?php
include 'header.php';
include '../User/db_config.php';
?>

<?php

if(isset($_POST['add_btn'])){
    $image_name = $_FILES['image']['name'];
    $target_dir = "../Upload/Image/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

        //fetch
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['sub_category'];
        // Insert record
        $query = "insert into products(id, name, price, category, image) values('', '$name', '$price', '$category', '$target_file')";
        mysql_query($query);

        // Upload file
        move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$image_name);

    }
 
}
?>

<h2>Add Product</h2>
<form method="post" action="" enctype='multipart/form-data'>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="name">Price:</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price">
    </div>
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
        <label for="image">Picture:</label>
    
        <input class="form-control" type="file" name="image" id="image"/>
    </div>
    <div class="form-group text-center">
        <input class="btn btn-lg btn-success" type='submit' value='Add' name='add_btn'>
    </div>
</form> 

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
</script>