<?php
session_start();

// Kullanıcı adı ve şifre doğrulama
$valid_username = "G231210034@sakarya.edu.tr"; // Gerçek kullanıcı adını buraya yazın
$valid_password = "G231210034"; // Gerçek şifreyi buraya yazın

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    if ($input_username == $valid_username && $input_password == $valid_password) {
        // Kullanıcı adı ve şifre doğru, oturumu başlat ve yönlendir
        $_SESSION["username"] = $input_username;
        header("Location: welcome.php");
        exit();
    } else {
        // Kullanıcı adı veya şifre yanlış, tekrar login sayfasına yönlendir
        header("Location: login.html");
        exit();
    }
}
?>
