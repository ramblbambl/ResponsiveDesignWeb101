<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  </head>
  <body>
    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Responsive Design</li>
          <li><a href="index.html">Register</a></li>
          <li><a href="delete.html">Delete</a></li>
          <li><a href="control.html">Display Data</a></li>
          <li><a href="data.php">Display all User Data</a></li>
        </ul>
      </div>      
    </div>
    <!-- End Top Bar --> 

    <div class="row column text-center">
      <h2>Your entry:</h2>
      <table style="margin-left:auto; margin-right:auto">
        <tr>
          <th>Id</th>
          <th>Prename</th>
          <th>Surname</th>
          <th>Email</th>
          <th>IsCool?</th>
          <th>Gender</th>
        </tr>
        <?php
          $servername='localhost';
          $username='root';
          $password='';
          $dbname = "mydb";
          $conn=mysqli_connect($servername,$username,$password,$dbname);

          if(!$conn){
            //Checks the Database connection
            die('Could not Connect My Sql:');
          }

          $email = htmlspecialchars($_POST["email"]);
          // $pw = password_hash(htmlspecialchars($_POST["pw"]), PASSWORD_DEFAULT);
          $sql = "SELECT * FROM user WHERE email = '$email'";
          // sql query

          try {
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  echo
                   "<tr>",
                   "<td>" . $row["UserID"]. "</td>",
                   "<td>" . $row["prename"]. "</td>",
                   "<td>" . $row["name"]. "</td>",
                   "<td>" . $row["email"]. "</td>",
                   "<td>" . $row["isCool"]. "</td>",
                   "<td>" . $row["gender"];"</td>";
                   "</tr>";
                }
              } else {
                echo "0 results";
              }

            mysqli_close($conn);
            //End mysql connection!!  
          } catch (Exception $e) {
            echo 'ERROR: Following Problem appeared: ',  $e->getMessage(), "\n";
          }
        ?>
      </table>
    </div>    

    <div class="callout large secondary">
      <div class="row">
        <div class="large-4 columns">
          <h5>Danke das Sie sich bei dieser Übungsseite Registrieren</h5>
          <p>Das bedeutet mir sehr viel, denn somit kann ich sehr viel lernen, da ich mit Ihren Daten die verschiedenen Funktionen Testen kann.</p>         
        </div>        
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>