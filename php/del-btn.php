<?php
    $conn = mysqli_connect("localhost", "root", "", "verseinmind_db");
    if ($conn == FALSE) {
        die ("Error connecting to mysql server: " . mysqli_connect_error());
    }

    $verse_name = $_GET['id'];
    $user_id = $_GET['user'];

    $del_verse_query = "DELETE FROM verses WHERE user_id='$user_id' AND verse_name='$verse_name'";
    $del_verse_result = mysqli_query($conn, $del_verse_query);

    if ($del_verse_result) {
        header("Location: memorise.php");
    } else {
        die("Error in deleting verse.");
    }

    mysqli_close($conn);
?>