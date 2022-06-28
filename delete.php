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
$sql = "DELETE FROM user WHERE email = '$email'";
//sql query

try {
   $result = mysqli_query($conn, $sql);
   mysqli_close($conn);
   //End mysql connection!!  
} catch (Exception $e) {
   echo 'ERROR: Following Problem appeared: ',  $e->getMessage(), "\n";
}
?>

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
      <h2>Successfully deleted:</h2>
      <p>The following entry has been deleted: <?php echo $email;?></p>
      
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

   
