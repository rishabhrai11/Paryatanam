<!DOCTYPE html>
<html>
  <head>
    <style>
      div{
        text-align: right;
      }
      </style>
    <meta charset="UTF-8">
    <title>Booking details</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <div class="container">
    <h2>Admin Database</h2>      
    <div>   
    <button class='logout-button' onclick="window.location.href='login/logoutaction.php'">Logout</button>       
    </div>
      <table>
        <tr>
          <th>USERNAME</th>
          <th>CITY</th>
          <th>PLACE</th>
        </tr>
        <?php
          // Connect to database
          $servername = "localhost";
          $username = "root";
          $password = "usbw";
          $dbname = "test";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);

          // Check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // Select data from database
          $sql = "SELECT username, city, place FROM bookingdata";
          $result = mysqli_query($conn, $sql);

          // Display data in table
          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['place'] . "</td>";
            echo "</tr>";
          }

          // Close connection
          mysqli_close($conn);
        ?>
      </table>
    </div>
  </body>
</html>