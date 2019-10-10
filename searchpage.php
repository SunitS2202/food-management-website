<!DOCTYPE html>
<html lang="en">
<head>

     <title>Seaarchpage</title>
<!-- 

Get Ready Template

https://templatemo.com/tm-521-get-ready

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/vegas.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/templatemo-style.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
 $dbcon = mysqli_select_db($conn,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['search'])){
  $q = $_POST['q'];

$sql = "SELECT * FROM recipe WHERE rec_name LIKE '%$q%'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
if ($rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["rec_id"]. " - Name: " . $row["rec_name"]. "<br>". "Steps:" . $row["steps"]. "<br>";
    }
} else {
    echo "0 results";
}

  }
?>

     <section id="home">
        <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="home-info">
                              <div class="subscribe-form">
                                <form method="POST" action="searchpage.php" >
                                  <input type="text" name="q" name="s_text" class="form-control" placeholder="Search" required="" >
                                  <button type="submit" class="form-control" ><i class="fa fa-search"></i></button>
                                </form>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
     

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/vegas.min.js"></script>
     <script src="js/countdown.js"></script>
     <script src="js/init.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>