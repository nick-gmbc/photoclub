<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    $servername = "localhost";
    $db_username = "photo_club_admin";
    $db_password = "wotApic5%";
    $db = "photoclub";

    // Create connection
    $conn = mysqli_connect($servername, $db_username, $db_password, $db);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // matching password and user name

    $query = "SELECT * FROM members WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    

    if ( mysqli_num_rows( $result ) == 1) {
        session_start();
        $_SESSION["username"]  = $username;
        $row = mysqli_fetch_assoc($result);
        $_SESSION["firstname"] = $row["first_name"];
        $message = "OK";
    }
    else {
        $message = "FAIL";
    }
    mysqli_close($conn);
    echo $message;

?>