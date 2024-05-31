<?php
include '../includes/connect.php';
//save code
if (isset($_POST['btnSave'])) {
    $name = $_POST['name'];
    $code = $_POST['code'];
    $sql = "INSERT INTO accounts(name,code)VALUES('$name','$code')";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo "<script>alert('inserted Successfully'); location='../newAccount.php';</script>";
    }
}
//delete code
if (isset($_GET['Aid'])) {
    $id = $_GET['Aid'];
    $sql = "DELETE FROM accounts WHERE id='$id'";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo "<script>alert('Deleted Successfully'); location='../manageAccount.php';</script>";
    }
}
//update code

if (isset($_POST['btnUpdate'])) {
    $name = $_POST['name'];
    $code = $_POST['code'];
    $id = $_POST['id'];
    $sql = "UPDATE accounts SET name='$name', code='$code' WHERE id='$id' ";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo "<script>alert('Updated  Successfully'); location='../manageAccount.php';</script>";
    }
}
