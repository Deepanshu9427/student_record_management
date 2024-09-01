<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM course WHERE student_id = ? ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id); // 'i' indicates the parameter type is integer
$stmt->execute();

// Check if the query was successful
if ($stmt->affected_rows > 0) {
    header("Location: first.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
