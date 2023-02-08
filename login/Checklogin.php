<?php
  // Start the session
  session_start();

  // Check if the user is logged in
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // User is logged in, show the home page
	  header("Location: \index.php");
  } else {
    // User is not logged in, show the login page
    header("Location: \login.php");
  }
?>