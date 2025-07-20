<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List of Debugging</title>
    <style>
        th {
            text-align: left;
            min-width: 200px;
        }
    </style>
</head>
<body>
    <h1>Member List</h1>
    <?php
        $servername = "localhost";
        $username = "photo_club_admin";
        $password = "wotApic5%";
        $db = "photoclub";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $db);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "<p>Connected successfully</p>";
        $query = "SELECT * FROM members";
        $result = mysqli_query($conn, $query);
        echo "<table>";
        echo "<tr>";
        echo "<th>Username</th>";
        echo "<th>Password</th>";
        echo "<th>First Name</th>";
        echo "<th>Family Name</th>";
        echo "<th>Date Joined</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["first_name"] . "</td>";
            echo "<td>" . $row["family_name"] . "</td>";
            echo "<td>" . $row["date_joined"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($conn);
    ?>
</body>
</html>