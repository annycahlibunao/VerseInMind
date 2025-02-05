<?php
    $conn = mysqli_connect("localhost", "root", "", "verseinmind_db");
    if ($conn == FALSE) {
        die ("Error connecting to mysql server: " . mysqli_connect_error());
    }

    if(isset($_GET['id'])){
        $verse_name = $_GET['id'];
    }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/practice.css">
        <link rel="stylesheet" href="../css/nav.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/webicon.png">
        <title>VerseInMind</title>
    </head>
    <body> 

    <a href="memorise.php">
    <button id="return-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#FFFFFF"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>        
    </button>
    </a>

    <div id="cont-one">
        <div id="sub-title-cont">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M160-200q-33 0-56.5-23.5T80-280v-400q0-33 23.5-56.5T160-760h640q33 0 56.5 23.5T880-680v400q0 33-23.5 56.5T800-200H160Zm0-80h640v-400H160v400Zm160-40h320v-80H320v80ZM200-440h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80ZM200-560h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80Zm120 0h80v-80h-80v80ZM160-280v-400 400Z"/></svg>
            <h3>Rewrite the verse below</h3>
        </div>
        <h1><?php echo $verse_name; ?></h1> 

        <form>
            <textarea id="rewrite-ans-field" name="rewrite-ans" placeholder="Enter your answer here"></textarea>
        </form>
    </div>
    </body>
</html>