<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "mydb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:'); //Checks the Database connection
}

$prename = htmlspecialchars($_POST["prename"]);
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$pw = password_hash(htmlspecialchars($_POST["pw"]), PASSWORD_DEFAULT);

//GET FOR GENDER
$gender = $_POST["gender"];  

//CHECKING IF USER IS COOL
if(isset($_POST['isCool'])) {
  $isCool = 1; //User checked "isCool"
}else{
  $isCool = 0; //User didn't check "isCool"
}

$sql = "INSERT INTO user (prename,name,email,pw,gender,isCool)
VALUES ('$prename','$name','$email','$pw','$gender','$isCool')";
//sql query

if (mysqli_query($conn, $sql)) {
  //INVOKE SQL QUERY
  } else {
  echo "Error: " . $sql . " " . mysqli_error($conn);
  //Error msg @ failure
  }
mysqli_close($conn);
//End mysql connection!!
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
      <h2>Successfully registered:</h2>
      <p>You can now register another user, or get the Data of your User. You can also delete the User</p>      
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

    
