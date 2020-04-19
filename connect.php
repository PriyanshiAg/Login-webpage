<?php
$user name=$_POST['user name'];
$email id=$_POST['email id'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','test');
if($conn->connect_error){
die('connection failed:'.$conn->connect_error);
}else{
$stmt=$conn->prepare("insert into registration(user name,email id,password)
values(?,?,?)");
$stmt->bind_param("sss",$user name,$email id,$password);
$stmt->execute();
echo "registered successfully...";
$stmt->close();
$conn->close();
}
?>