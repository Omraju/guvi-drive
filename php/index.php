<?php
$conn = mysqli_connect("localhost", "root", "", "guvi");
if (!$conn) {
    die("Connection to DB failed with : " . mysqli_connect_error());
}
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    {
        $query = "SELECT `email`,`password` FROM user WHERE email='$name'";
    }
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 0) {
        echo '<script>alert("Invalid Credentials")</script>';
    } else if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            if ($row['password'] == $pass) {
                $_SESSION['login_mail'] = $row['email'];
                $_SESSION['login_user'] = $name;
                header("Location:../profile.html");
            } else {
                echo password_verify($pass, $row["password"]);
                print_r($row);
                echo '<script>alert("Invalid Credentials")</script>';
                header("Location:../index.html");
            }
    }
}
mysqli_close($conn);

?>