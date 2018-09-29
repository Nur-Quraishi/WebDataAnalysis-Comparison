<?php
include '../User/db_config.php';
$delete_id = $_GET['delete'];

$delete = mysql_query("DELETE FROM products WHERE id='$delete_id'");
if ($delete) {
    header('Location:deletepro.php');
}
 else {
    header('Location:index.php');
}
?>
