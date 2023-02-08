<?php
// Start the session
session_start();
echo "start ";
// Connect to the database
$conn = mysqli_connect("localhost", "root", "usbw", "test");

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "connected ";
// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the data from the form
  $username = $_SESSION['username'];
  $city = "Dubai";
  $place = mysqli_real_escape_string($conn, $_POST['place']);

  // Prepare and execute the INSERT statement
  $sql = "INSERT INTO bookingdata (username, city, place) VALUES ('$username', '$city', '$place')";
  $stmt = mysqli_prepare($conn, $sql);

  if (mysqli_stmt_execute($stmt)) {
    // Redirect to the "BookingPopup.html" file
    header("Location: BookingPopup.html");
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the connection
mysqli_close($conn);
?>