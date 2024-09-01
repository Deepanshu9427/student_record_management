<?php

// Get current date and time
$currentTime = date("Y-m-d H:i:s");

// Check if cookie is already set
if (!isset($_COOKIE['lastVisit'])) {
  // Set cookie with current time and an expiry time (1 hour)
  setcookie('lastVisit', $currentTime, time() + 3600);
  $message = "This is your first visit.";
} else {
  $lastVisit = $_COOKIE['lastVisit'];
  $message = "Last visited on: " . $lastVisit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Last Visited Time</title>
</head>
<body>
  <h1><?php echo $message; ?></h1>
</body>
</html>