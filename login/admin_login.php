<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <form action="loginaction.php" method="post">
        <h2>Admin Login</h2>
        <input type="email" name="email" placeholder="Email" id="email" class="tb" required>
  				<input type="password" name="password" placeholder="Password" id="pwd1" required>
  				<input type="submit" name="submit" value="Login" class="btn">
      </form>
    </div>
  </body>
</html>