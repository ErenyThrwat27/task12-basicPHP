<?php
include('./dbconnection.php');
$id =$_GET['id'];
$sql = "DELETE FROM students where user_id='$id'";
$connection->exec($sql);
echo "<br> Data deleted succ";
header('Refresh:5 URL=./select_students.php');