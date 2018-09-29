<?php
include '../User/header.php';
include '../User/db_config.php';
?>


<div class="content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="card">
                    <div class="header">
                        <h4 class="title"> Add New Slider </h4>
                    </div>
                    <div class="content">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>
                                            <?php
                                            if (isset($_POST['add_slider'])) {
                                                $slider_title = $_POST['slider_title'];

                                                if (!$_FILES['slider_image']['error']) {
                                                    $slider_image = $_FILES['slider_image']['name'];
                                                    $dir = "slider";
                                                    @copy($_FILES['slider_image']['tmp_name'], "$dir/$slider_image");
                                                    $slider = "$dir/$slider_image";
                                                } else {
                                                    $slider = "slider/villege.jpg";
                                                }


                                                $slider_insert = mysql_query("INSERT INTO slider VALUES('','$slider_title','$slider')");
                                                if ($slider_insert) {
                                                    echo "New Slider Add Successfull";
                                                } else {
                                                    echo "Not Success";
                                                }
                                            }
                                            ?></label>
                                        <!--....................Slider Update................-->
                                        <label>
                                            <?php
                                            if (isset($_POST['update_slides'])) {
                                                $slider_titles = $_POST['slider_title'];
                                                $update_fid = $_POST['update_fid'];

                                                if (!$_FILES['slider_image']['error']) {
                                                    $image_slider = $_FILES['slider_image']['name'];
                                                    $imgdir = "slider";
                                                    copy($_FILES['slider_image']['tmp_name'], "$imgdir/$image_slider");
                                                    $sliderupdate = "$imgdir/$image_slider";

                                                    $update_sliders = mysql_query("UPDATE slider SET slider_title='$slider_titles',slider_image='$sliderupdate' WHERE slider_id='$update_fid'");
                                                } else {
                                                    $update_sliders = mysql_query("UPDATE slider SET slider_title='$slider_titles' WHERE slider_id='$update_fid'");
                                                }
                                                if ($update_sliders) {
                                                    echo "Slider Update Successfully";
                                                } else {
                                                    echo "Slider Not Update";
                                                }
                                            }
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <?php
                                @$update_id = $_GET['update_id'];
                                $update_view = mysql_query("SELECT * FROM slider WHERE slider_id='$update_id'");
                                $fetch_update = mysql_fetch_array($update_view);
                                ?>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="title"> Slider Title </label>
                                        <input type="text" required="" name="slider_title" value="<?php echo $fetch_update['slider_title']; ?>"class="form-control" id="title" placeholder="Enter Slider Title">
                                        <input type="hidden" name="update_fid" value="<?php echo $fetch_update['slider_id']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="slider"> Select Slider Image </label>
                                        <input type="file" name="slider_image" id="slider"><br/>
                                        <?php
                                        if ($update_id != 0) {
                                            ?>
                                            <img src="<?php echo $fetch_update['slider_image']; ?>" style="width: 150px; height: 90px;">;
                                        <?php }
                                        ?>

                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <?php
                                    if ($update_id != 0) {
                                        ?>
                                        <button type="submit" name="update_slides" class="btn btn-info btn-fill pull-right">Update Slider</button>
                                    <?php } else {
                                        ?>
                                        <button type="submit" name="add_slider" class="btn btn-info btn-fill pull-right">Add Slider</button>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1">
                <div class="card card-plain">
                    <div class="header">
                        <h4 class="title"> Slider view </h4>

                    </div>
                    
                        
                            <thead>
                            <th>ID</th>
                            <th>Slider Title</th>
                            <th>Slider Image</th>
                            <th>Edit</th>
                            <th>Delete</th>

                            </thead>

                            <?php
                            $x = 1;
                            $select = mysql_query("SELECT * FROM slider ORDER BY slider_id DESC LIMIT 10");
                            while ($fetch = mysql_fetch_array($select)) {
                                ?>
                                  
                                <th><?php echo $x++; ?></th>
                                <th><?php echo $fetch['slider_title']; ?></th>
                                <th><a href="<?php echo $fetch['slider_image']; ?>" target="blank"><img src="<?php echo $fetch['slider_image']; ?>" style="width: 90px; height: 50px;"></a></th>
                                <th><a href="add_slider.php?update_id=<?php echo $fetch['slider_id']; ?>">Edit</a></th>
                                <th><a href="../Admin/delete_slider.php?delete=<?php echo $fetch['slider_id']; ?>">Delete</a></th>
                                
                            <?php } ?>
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../User/footer.php';
?>