<?php
session_start();

// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'root', 'usbw', 'test');

// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  
  // Query the "testsignup" table for the entered email and password
  $query = "SELECT * FROM testsignup WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  
  // If there is a match, start a session and store the user's ID in a session variable
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $user['id'];
    
    // Redirect the user to the dashboard
    $_SESSION['logged_in'] = true;
    $result1 = mysqli_query($conn, "SELECT username FROM testsignup WHERE email='$email'");
    $row = mysqli_fetch_row($result1);
    $_SESSION['username'] = $row[0];
    header("Location: index.php");
    exit;
  } else {
    // If the login is unsuccessful, display an error message
    $error = "Invalid email or password";
  }
}
?>
