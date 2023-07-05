<?php  

include "db_conn.php";

$sql = "SELECT * FROM tb_users ORDER BY id DESC";
$result = mysqli_query($conn, $sql);