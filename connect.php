<?php
$Username=$_POST['Usename'];
$E-mail ID=$_POST['email'];
$Phone Number=$_POST['Phone Number'];
$Password=$_POST['Password'];
//Database connection
$conn=new mysqli('localhost','root','','reema');
if($conn->connect_error){
  die('Connection Failed:',$conn->connect-error);
}esle{
  $stmt=$conn->prepare("insert into login(Username,email,Phone Number,Password)values(?,?,?,?)");
  $stmt->bind-param("ssis", &Username, &email, &Phone Number, &Password);
  $stmt->execute();
  echo "Registration Successfully......";
  $stmt->close();
  $conn->close();
}
 ?>
