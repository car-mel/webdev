<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["announcement"])) {
    // Establish a database connection
    $host = "localhost"; // Replace with your MySQL server host
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $database = "webproj"; // Replace with your database name

    $conn = new mysqli($host, $username, $password, $database);

    // Check the database connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the announcement from the form
    $announcement = $_POST["announcement"];

    // Prepare and execute an SQL INSERT statement
    $sql = "INSERT INTO announcements(content) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $announcement);

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
        echo "<script > alert('Announcement posted successfully!');</script>";
    } else {
        echo "Error posting announcement: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
