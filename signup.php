<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href=".//style1.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <!--<h4>It's free and only takes a minute</h4>-->
      <form name="Sign Up" action="signupaction.php"
      method="post" autocomplete="off" >
        <label>username</label>
        <input type="username" id="username" name="username" placeholder="pratik" />
        
        <label>Email</label>
        <input type="email" id="email" name="email" placeholder="pratik1@gmail.com" />
       <!-- <label>Password</label>
        <input type="password" placeholder="" />-->
        <label> Password</label>
        <input type="password" id="password" name="password" placeholder="********" />
        <input type="submit" id="Submit" name="submit" value="Submit" />
       <!-- <a class="button" href="#">Submit</a>-->
      </form>

    </div>
    <p class="para-2">
      Already have an account? <a href=".//login.php">Login here</a>
    </p>
  </body>
</html>