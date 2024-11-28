<?php
include 'function.php';
session_start();
if(!isset($_SESSION['id'])){
    header("location:login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'header.html'
    ?>
    <a href="index.php">Food</a>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p><a href="logout.php">Logout</a></p>

    <?php
    include 'index.php';
    include 'menu.php';
    include 'about.php';

    include 'footer.html';

        ?>

    
</body>
</html>