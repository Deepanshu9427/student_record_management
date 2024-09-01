<?php
include 'config.php'; // Include your database connection configuration

$id = $_POST['stud_id'];    
$name = $_POST['name'];
$course = $_POST['course'];
$year = $_POST['year'];
$phone_no = $_POST['phone_no'];


// Prepare and execute the SQL query
$sql = "INSERT INTO course (student_id, name, course, year,phone_no)
        VALUES (?, ?, ?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issii", $id, $name, $course,$year,$phone_no); // 'isi' indicates the parameter types (integer, string, integer)


$stmt->execute();

// Check if the query was successful
if ($stmt->affected_rows > 0) {
    header("Location: first.php");
    exit();
} else {
    echo "Error inserting record: " . $conn->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
