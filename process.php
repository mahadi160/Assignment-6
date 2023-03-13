<?php
session_start();
// check if form is submitted
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['profile_picture']['name'])) {
        echo "Please fill out all fields.";
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // save profile picture to server
    $target_dir = "uploads/";
    $target_file = $target_dir . date("Y-m-d_H-i-s") . '_' . basename($_FILES["profile_picture"]["name"]);
    if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
        // save user data to csv file
        $data = array($name, $email, $target_file);
        $fp = fopen('users.csv', 'a');
        fputcsv($fp, $data);
        fclose($fp);
    }
    // set cookie
    setcookie("name", $name, time() + (86400 * 30), "/"); // cookie will expire in 30 days

    // redirect to profile page
    header('Location: profile.php');
}
?>