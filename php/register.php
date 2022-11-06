<?php
    $conn = mysqli_connect("localhost","root","","guvi");
    if(!$conn)
    {
        die("Connection to DB failed with : ".mysqli_connect_error());
    }
    

       
        $name = $_POST['email'];
        $pass = $_POST['pass1'];
            $sql = "insert into user(`email`, `password`) values('$name','$pass')";
            $insert = mysqli_query($conn,$sql);
            if(!$insert)
                echo '<script>alert("Cannot Create Account")</script>';
            else
            {
                echo '<script>alert("Account created successfully")</script>';
                header("Location:../index.html");
            }
    
    
    mysqli_close($conn);
?>