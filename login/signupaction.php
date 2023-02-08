<?php
session_start();
//echo "start";
// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'root', 'usbw', 'test');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "connected";
// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Get the form data
 // echo "dataok";
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  
  // Insert the data into the "testsignup" table
  $query = "INSERT INTO testsignup (username, email, password) VALUES ('$username', '$email', '$password')";//echo "inserted";
  $result = mysqli_query($conn, $query);
  
  // Check if the insertion was successful
  if ($result) {
    // Redirect the user to the dashboard
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $_POST['username'];
    header("Location: \index.php");
    exit;
  } else {
    // If the insertion was unsuccessful, display an error message
    echo "Error: " . mysqli_error($conn);
  }
}
?>
