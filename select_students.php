<?php
include('./dbconnection.php');
$stmt = $connection->prepare("SELECT*FROM students");
$stmt->execute();
$data =$stmt->fetchALL()




?>

<!DOCTYPE html>
<html>
<head>
  <title>bootstrap</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid yellow;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color:yellow;
}
</style>
</head>
<body>

<h2>Select Students</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Contact Info</th>
    <th>Email</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php
  foreach($data as $k)
     echo" <tr>
     <td>{$k['name']}</td>
      <td>{$k['contact_info']}</td>
      <td>{$k['email']}</td>
      <td>
       <a href='./update_students.php?id={$k['user_id']}'>Edit</a>
      </td>
      <td>
       <a href='./delete_student.php?id={$k['user_id']}'>Delete</a>
      </td>
     </tr>";
    ?>
</table>

</body>
</html>
