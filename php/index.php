<?php
$email=$_POST['email'];
$password=$_POST['password'];

if($email == '' || $password == ''){
echo "Please fill all fields";
}else{
echo "Form Submitted Succesfully. The details are:"."<br><br>";
echo "<b>Email:</b> ".$email."<br>";
echo "<b>password:</b> ".$password."<br>";
?>