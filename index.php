<?php 

    $conn = mysqli_connect("localhost", "root", "", "verseinmind_db");
    if ($conn == FALSE) {
        die ("Error connecting to mysql server: " . mysqli_connect_error());
    }

    if (isset($_GET['form-type'])){
        $check_form_type = $_GET["form-type"];

        if ($check_form_type == "signup"){
            $fname_input = $_GET["firstname"];
            $lname_input = $_GET["lastname"];
            $email_input = $_GET["email"];
            $password_input = $_GET["password"];

            setcookie("cookie_email", $email_input, time() + (60 * 60), "/");
            setcookie("cookie_password", $password_input, time() + (60 * 60), "/");

            $signup_query = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES('$fname_input', '$lname_input', '$email_input', '$password_input') ";
            $signup_result = mysqli_query($conn, $signup_query);

            if ($signup_result) {
                echo "New user added successfully";
            } else {
                die ("Error in database query");
            }
        } else if ($check_form_type == "login"){
            $email_input = $_GET["email"];
            $password_input = $_GET["password"];
    
            $email_input_safe = mysqli_real_escape_string($conn, $email_input);
            $login_query = "SELECT user_id, password FROM users WHERE email='$email_input_safe'";
            $login_result = mysqli_query($conn, $login_query);
    
            if ($login_result && mysqli_num_rows($login_result) > 0) {
                $row = mysqli_fetch_assoc($login_result);
                $stored_password = $row['password'];  
        
                if ($password_input === $stored_password) {
                    echo "Login successful!";  
                } else {
                    echo "Invalid password.";  
                }
            } else {
                echo "Email not found.";  
            }
        }
    }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">
        <!--<script src="js/index.js" defer></script>-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/webicon.png">
        <title>To-do List</title>
    </head>
    <body>  
        <?php 
            
        ?>
    </body>
</html>
