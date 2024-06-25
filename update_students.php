<?php
include('./dbconnection.php');
$id =$_GET['id'];
if(isset($_POST['update'])){
    $name =$_POST['name'];
    $info =$_POST['contact_info'];
    $email =$_POST['email']; 
    $pw=$_POST['password'];

    if(!empty($name)&&!empty($info)&&!empty($email)&&!empty($pw)){
        $sql ="update students
        SET name='$name',contact_info='$info',email='$email',password='$pw'
        where user_id='$id'";
        $stmt =$connection->prepare($sql);
         $stmt->execute();
         echo "data updated successfully";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School</title>
</head>
<body>

<h2>Students</h2>

<form action="<?php '_PHP_SELF'?>" method="post">
  
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br><br>
  
  <label for="contact">Contact Info:</label><br>
  <input type="text" id="contact_info" name="contact_info"><br><br>
  
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br><br>
  
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br><br>
  
  <button type="submit" name ="update">
    Update
  </button>
</form>

</body>
</html>