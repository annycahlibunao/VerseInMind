<?php 

    $cookie_email = isset($_COOKIE["cookie_email"]) ? $_COOKIE["cookie_email"] : "";
    $cookie_password = isset($_COOKIE["cookie_password"]) ? $_COOKIE["cookie_password"] : "";
    $error_msg = isset($_GET["error"]) ? $_GET["error"] : "";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="login.css">
        <!--<script src="js/index.js" defer></script>-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/webicon.png">
        <title>To-do List</title>
    </head>
    <body>  
    <div id="main-cont"> 
            <h1>Welcome back<span style="color: #ffa25c">.</span></h1>
            <h4>Don't have an account? <a href="signup.php">Sign Up</a></h4>
            <form name="form" action="index.php" method="GET">
                <input type="hidden" name="form-type" value="login">
                <input type="text" name="email" id="email-input" class="login-details" placeholder="Email" value="<?php echo $cookie_email?>" required><br>
                <input type="text" name="password" id="password-input" class="login-details" placeholder="Password" value="<?php echo $cookie_password?>" required><br>
                <p id="error-msg"><?php echo $error_msg; ?></p>
                <input type="submit" id="submit-btn" value="Log in">
            </form>
        </div>
    </body>
</html>
