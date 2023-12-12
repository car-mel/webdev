
<?php
    $host = "localhost"; // Replace with your MySQL server host
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $database = "webproj"; // Replace with your database name

    $conn = new mysqli($host, $username, $password, $database);

    // Check the database connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $activityID = $_GET['id'];
    $sql = "DELETE FROM announcements WHERE id = $activityID";
    if (mysqli_query($conn, $sql)) {
        header('Location: forms-elements.php');
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
?>