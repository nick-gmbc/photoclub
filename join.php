<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $familyname = $_POST["familyname"];

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

    $create_date = date("Y-m-d", time()); 

    $query = "INSERT INTO members VALUES ('$username','$password','$firstname','$familyname','$create_date')";

    if (mysqli_query($conn, $query)) {
        $message = "New remember created successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    echo $message;

?>