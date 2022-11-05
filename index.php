<?php
    $email = $_['email'];
    $password = $_['password'];

    $con = new mysqli("localhost","root","","guvi");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);

    } else {
        $stmt =$con->prepare("select * from register where email =?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_resut();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                echo "<h2> Invalid Email or Password</h2>;
            }
        } else {
         echo \"<h2>Invalid Email or password</h2>";
        }
    }
}
?>