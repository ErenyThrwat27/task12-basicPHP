<?php
$server ="localhost";
$username ="root";
$pw ="";
$dbname ="school";


try{
   $connection= new PDO(
      "mysql: host=$server; dbname=$dbname",
      $username,
      $pw
    );
    $connection->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
   echo "Connected Successfuly<br>";
}catch(PODException $e){
    echo "<br>Connection Failed: ".$e->getMessage();
}