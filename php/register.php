<?php
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

if($email == '' || $password == ''){
echo "Please fill all fields";
}else{
echo "Form Submitted Succesfully. The details are:"."<br><br>";
echo "<b>Email:</b> ".$email."<br>";
echo "<b>password:</b> ".$pass1."<br>";
echo "<b>confirm password:</b> ".$pass2."<br>";
}
?>