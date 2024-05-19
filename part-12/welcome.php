<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script>
        // 5 saniye sonra index.html sayfasına yönlendirme
        setTimeout(function() {
            window.location.href = 'index.html';
        }, 5000);
    </script>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
    <p>You will be redirected to the home page in 5 seconds...</p>
</body>
</html>
