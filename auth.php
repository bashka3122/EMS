<?php
session_start();
include 'Admin/includes/connect.php';
if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass' AND status=0";
    $q = mysqli_query($conn, $sql);
    if ($q->num_rows > 0) {
        $r = mysqli_fetch_assoc($q);
        $_SESSION['userEmail'] = $r['name'];

        header('location: Admin/dashboard.php');
    } else {
        echo "<script>alert('wrong credentails'); location='index.php';</script>";
    }
}
