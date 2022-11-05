<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['name'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);


        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $bio    = stripslashes($_REQUEST['bio']);
        $bio    = mysqli_real_escape_string($con, $bio);

        $age    = stripslashes($_REQUEST['age']);
        $age    = mysqli_real_escape_string($con, $age);

        $date    = stripslashes($_REQUEST['date']);
        $date    = mysqli_real_escape_string($con, $date);

        $file   = stripslashes($_REQUEST['file']);
        $email    = mysqli_real_escape_string($con, $file);

        $pass1    = stripslashes($_REQUEST['pass1']);
        $pass1    = mysqli_real_escape_string($con, $pass1);

        $pass2    = stripslashes($_REQUEST['pass2']);
        $pass2    = mysqli_real_escape_string($con, $pass2);

        $query    = "INSERT into `guvi` (name, email, bio, age, date, file, pass1, pass2 )
                     VALUES ('$name','$email', '$bio','$age','$date','$file','$pass1','$pass2')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>