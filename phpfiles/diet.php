<?php
$to="shantanutripathi96@gmail.com";
$name=$_POST['nm'];
$email=$_POST['em'];
$phone=$_POST['ph'];
$course = $_POST['pla'];
$gender=$_POST['gender'];
$fees = $_POST['fees'];
$address=$_POST['add'];
$from="FROM: ".$email;
/*echo $address;
echo $name; 
echo$email; 
echo $phone; 
echo $course; 
echo $gender; 
echo $fees;*/

$connect = mysqli_connect('localhost','id11565138_shantanu','shantanu123','id11565138_tg');

if($connect){
    //echo "connection successfull";
$query="INSERT INTO diet_clients(name,email,gender,address,phone,course,monthly_fees) VALUES ('$name','$email','$gender','$address','$phone','$course','$fees')";

$res=mysqli_query($connect,$query);

if($res){
    
$message ="NEW APPLICATION : ".$name."<br>email: ".$email."<br>phone: ".$phone."<br>check admin section as sson as possible";

mail($to,"FORM SUBMISSION",$message,"From: TG SERVER<user11565138@us-imm-node4a.000webhost.io>\r\nContent-type: text/html");

mail($email,"TG APPLICATION","WE THANKYOU FOR CHOOSING TOUGH GENERATION , WE WILL GET BACK TO YOU AS SOON AS POSSIBLE","From: TOUGH GENERATION<user11565138@us-imm-node4a.000webhost.io>\r\nContent-type:text/html");

echo "<h1 align=center>THANKYOU FOR APPLYING</h1><br> <h2 align=center> WE WILL GET BACK TO YOU SOON.<br>Check your email for confirmation</h2>";
}
else echo "sql error";
}

else echo "unable to connect";
?>