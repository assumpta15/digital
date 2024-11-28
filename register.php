



<?php
    include 'function.php';   
   

    
    
    
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);
    
    
    //check for empty fields or mismatched passwords
    
    if(empty($username) || empty($email) || empty($password) || ($password !== $confirm_password)){
        echo "please fill out all fields and make sure passwords match.";
    }else {
        //check if username or email already exists
    
        $statement = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $statement->bind_param("ss", $username, $email);
        $statement->execute();
        $statement->store_result();
    
        if($statement->num_rows>0){
            echo "Username or email already exists.";
        }else{
            //hash password and save the user
            
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $statement = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");
            $statement ->bind_param("sss", $username, $email, $hashed_password);
    
            if($statement->execute()){
                echo "Registration successful!";
                header("Location: login.php");
            }else{
                echo "Something went wrong";
            }
        }
        $statement->close();
    }
    $conn->close();
    }
      
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
     <link rel="stylesheet" href="style.css"> 
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Open Sans",sans-serif;
}
body{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    width: 100%;
    padding: 0 10px;
    background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
}
body::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: url("image/cloud2.webp"), #000;
    background-position: center;
    background-size: cover;
    z-index: -1;
}
.wrapper{
    width: 400px;
    border-radius: 15px;
    padding: 40px;
    text-align: center;
    background: rgba(255, 255, 255, 0.1);
   backdrop-filter: blur(20px);
   -webkit-backdrop-filter: blur(20px);
   box-shadow: 0 8px 32px rga(0,0,0,0.37);
   transition: all 0.3s ease;
}
.wrapper:hover{
    box-shadow: 0 12px 48px rgba(0,0,0,0.5);
    cursor: pointer;
}

form{
    display: flex;
    flex-direction: column;
}

h2{
    font-size: 2.2rem;
    margin-bottom: 25px;
    color: #ffffff;
    letter-spacing: 1px;
}

.wrapper a:hover{
    text-decoration: underline;
}

button{
    background-color: #271930;
    color: #ffffff;
    font-weight: 600;
    border: none;
    padding: 15px 20px;
    cursor: pointer;
    border-radius: 25px;
    font-size: 16px;
    border: 2px solid transparent;
    transition: all 0.3s ease;
}
button:hover{
    color: #000000;
    background: rgba(255,255,255,0.2) ;
    border-color: #ffffff;
}

.input-field{
    position: relative;
    border-bottom: 2px solid rgba(255, 255, 255, 0.3);
    margin: 20px 0;

}
.input-field label{
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    color: #ffffff;
    font-size: 16px;
    pointer-events: none;
    transition: 0.3s ease;
    
}

.input-field input{
    width: 100%;
    height: 40px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    color: #ffffff;
    padding: 0 10px;
}

.input-field input:focus~label,
.input-field input:valid~label{
    font-size: 0.9rem;
    top: 10px;
    transform: translateY(-150%);
    color: #ffdde1;
}
.input-field{
    position: relative;
    border-bottom: 2px solid rgba(255, 255, 255, 0.3);
    margin: 20px 0;
}
.formcontainer{
    width: 400px;
    border-radius: 15px;
    padding: 40px;
    text-align: center;
    background: rgba(255, 255, 255, 0.1);
   backdrop-filter: blur(20px);
   -webkit-backdrop-filter: blur(20px);
   box-shadow: 0 8px 32px rga(0,0,0,0.37);
   transition: all 0.3s ease;
}
.formcontainer:hover{
    box-shadow: 0 12px 48px rgba(0,0,0,0.5);
    cursor: pointer;
}

form{
    display: flex;
    flex-direction: column;
}

h3{
    font-size: 2.2rem;
    margin-bottom: 25px;
    color: #ffffff;
    letter-spacing: 1px;
}
.formcontainer a:hover{
    text-decoration: underline;
}


    </style>


</head>
<body>

<?php
//  include 'header.html'   ;
?>


   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<form action="register.php" method = "post"> 

<div class="formcontainer">
    <form action="">
    <h3 style="font-family:cursive;">WELCOME</h3>




<div class="input-field">
<input type="text" name="username" placeholder="Username" required>
<label for="username">Enter your username</label>

</div>

<div class="input-field">
<input type="email" name="email" placeholder="Email" required>
<label for="email">Enter your email</label>

</div>

<div class="input-field">
<input type="password" name="password" placeholder="Password" required>
<label for="password">Enter your password</label>

</div>

<div class="input-field">
<input type="password" name="confirm_password" placeholder="Confirm password" required>
<label for="password">Confirm password</label>

</div>








<!-- <button type="submit" value ="Register"> -->
    <button type="submit" value ="Register">Register</button>
<p style="margin-top:20px;">Already have an account? <a href="login.php">Login</a></p>







    </form>
</div>



<?php
//  include 'footer.html'
?>

</body>
</html>