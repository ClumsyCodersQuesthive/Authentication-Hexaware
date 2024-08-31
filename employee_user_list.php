<?php
// Include the database connection file
include 'econnect.php';

// Fetch all users from the database
$sql = "SELECT firstName, lastName FROM eusers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Trainer User List</h1>";
    echo "<table border='1'>";
    echo "<tr><th>UserName</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["firstName"]." "   . $row["lastName"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No users found.";
}

// Close the database connection
$conn->close();
?>
