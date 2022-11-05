<?php
    session_start();
    $con= mysqli_connect("localhost","root","","guvi")
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['name'])) {
        // removes backslashes


        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);


        $pass1    = stripslashes($_REQUEST['pass1']);
        $pass1    = mysqli_real_escape_string($con, $pass1);
        $stmt = $conn->prepare("INSERT INTO user (email, password,) VALUES (?, ?)");
        $stmt->bind_param("sss", $email, $pass1 );

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
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