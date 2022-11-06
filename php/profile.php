<?php
    $conn = mysqli_connect("localhost","root","","guvi");
    if(!$conn)
    {
        die("Connection to DB failed with : ".mysqli_connect_error());
    }        
        $name = $_POST['age'];
        $pass = $_POST['phone'];
        $hash = password_hash($pass, PASSWORD_DEFAULT);

            $sql = "insert into user(`name`, `password`, `address`, `gender`, `dob`, `contact`, `pincode`, `per10`, `per12`, `ugcgpa`, `pgcgpa`, `email`, `work`, `projects`, `intern`, `interests`, `resume`, `id`, `profile`, `mime`) values('$name','$hash','$address','$gender','$dob','$contact','$pincode','$per10','$per12','$ugcgpa','$pgcgpa','$email','$work','$projects','$intern','$interests','$resume','$id','$pic','$mime')";
            $insert = mysqli_query($conn,$sql);
            if(!$insert)
                echo '<script>alert("Cannot Create Account")</script>';
            else
            {
                echo '<script>alert("Account created successfully")</script>';
                header("Location:index.php");
            }
        }
        else
        {
            echo '<script>alert("You already have an account")</script>';
        }
    }
    
    mysqli_close($conn);
?>