<?php
    require_once "db.php";
 
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
 
 
    if(mysqli_query($conn, "INSERT INTO soccernews(title, note) VALUES('" . $title . "', '" . $note . "')")) {
     echo '1';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?>