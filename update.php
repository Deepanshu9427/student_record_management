<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];    
    $name = $_POST['name'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $phone_no = $_POST['phone_no'];

    // Update record in the database
    $sql = "UPDATE course SET name='$name', course='$course', year='$year', phone_no='$phone_no' WHERE student_id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: first.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
