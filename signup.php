<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="signup.css">
        <!--<script src="js/index.js" defer></script>-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/webicon.png">
        <title>VerseInMind</title>
    </head>
    <body>  
        <div id="main-cont"> 
            <h1>Welcome to VerseInMind<span style="color: #ffa25c">.</span></h1>
            <h4>Already have an account? <a href="login.php">Log In</a></h4>
            <form name="form-type" action="index.php" method="GET">
                <input type="hidden" name="form-type" value="signup">
                <div id="name-cont">
                    <input type="text" name="firstname" id="fname-input" class="login-details" placeholder="First name" required><br>
                    <input type="text" name="lastname" id="lname-input" class="login-details" placeholder="Last name" required><br>
                </div>
                <input type="text" name="email" id="email-input" class="login-details" placeholder="Email" required><br>
                <input type="text" name="password" id="password-input" class="login-details" placeholder="Password" required><br>
                <input type="submit" id="submit-btn" value="Create account">
            </form>
        </div>
    </body>
</html>