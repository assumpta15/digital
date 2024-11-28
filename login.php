<?php
    include "function.php";
    session_start();
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = trim($_POST["email"]);
        $password = trim($_POST["password"]);
    
        $statement = $conn->prepare("SELECT id, password FROM users WHERE  email = ?");
        $statement->bind_param("s", $email);
        $statement->execute();
        $statement->store_result();
    
        if($statement->num_rows == 1){
              $statement->bind_result($id, $hashed_password);
              $statement->fetch();
            if(password_verify($password, $hashed_password)){
                $_SESSION['id']=$id;
                $_SESSION['email']=$username;
                header("location: dashboard.php");
              }else{
                echo "Invalid password.";
    
              }
        }else{
            echo "No account found with that username.";
        }
        $statement->close();
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <?php
    // include 'header.html';
    ?> -->
<div class="wrapper">
    <form action="">
        <h2>Login</h2>
        <div class="input-field">
            <input type="text" required>
            <label for="email">Enter your email</label>
        </div>

        <div class="input-field">
            <input type="password" required>
            <label for="password">Enter your password</label>
        </div>

        <div class="forget">
            <label for="remember">
                <input type="checkbox" id="remember">
                <p>Remember me</p>
            </label>
            <a href="#">Forgot password</a>
        </div>
        <button type="submit">Login</button>
        <div class="register">
            <p>Don't have an account?<a href="register.php">Register</a></p>
        </div>
    </form>
   </div> 
</body>
</html>