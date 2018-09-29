    <?php include("../User/db_config.php"); ?>
    <?php
    if(isset($_POST['cat_id'])) {
      $sql = "select * from `product_category` where parent_cat=".mysql_real_escape_string($_POST['cat_id']);
      $res = mysql_query($sql);
      if(mysql_num_rows($res) > 0) {
        echo "<option value=''>Select Sub-Category</option>";
        while($row = mysql_fetch_object($res)) {
          echo "<option value='".$row->id."'>".$row->name."</option>";
        }
      }
    }
    ?>