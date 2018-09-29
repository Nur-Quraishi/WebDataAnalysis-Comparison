<?php
include '../User/db_config.php';
$delete_id = $_GET['delete'];

$delete = mysql_query("DELETE FROM slider WHERE slider_id='$delete_id'");
if ($delete) {
    header('Location:slider.php');
}
?>