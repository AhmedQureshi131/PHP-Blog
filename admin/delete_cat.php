<?php
include '../libs/database.php';
include '../libs/config.php';
include '../functions.php';
$db = new database();

if(isset($_GET['delete_id'])){
    $delete_id= $_GET['delete_id'];
    $query = "DELETE FROM categories where id = '$delete_id'";
    $run = $db->delete($query);
}
?>