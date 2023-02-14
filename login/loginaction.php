<?php
session_start();
// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'root', 'usbw', 'test');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

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
    $row = mysqli_fetch_assoc($result1);

    $usernaam = $row['username'];
    echo $usernaam;
    if($usernaam=="Admin"){
      header("Location: bookingdetails.php");
    } else {
      $_SESSION['username'] = $usernaam;
      header("Location: \index.php");
    }exit;
  } else {
    // If the login is unsuccessful, display an error message
    $error = "Invalid email or password";
  }
}
?>
