<?php

$name=$_POST['nm'];
$email=$_POST['em'];
$phone=$_POST['ph'];
$gender=$_POST['gender'];
$fees = $_POST['fees'];
$add=$_POST['add'];

$connect = mysqli_connect('localhost','root','','tg');

$query="INSERT INTO kickbox_clients(name,email,gender,address,phone,monthly_fees) VALUES ('$name','$email','$gender','$add','$phone','$fees')";
$res=mysqli_query($connect,$query);
if($res){
echo "<h1 align=center>THANKYOU</h1><br> <h2 align=center> CLASSES WILL BEGIN SOON</h2>";
}
else echo "sql error";


?>