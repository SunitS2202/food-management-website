
<!DOCTYPE html>
<html>
	<head>
		<title>Search Recipe </title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/vegas.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style1.css">
	</head>
	<body>
		 <section id="home">
        <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="home-info">
                              <div class="subscribe-form">
                                <form method="POST" action="searcht.php">
                                  <input type="text" name="q" class="form-control" placeholder="Recipe Name..." required="">
                                  <button type="submit" class="form-control" name="search" value="Search"><i class="fa fa-search"></i></button>
                                </form>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
		<!-- dont change the code between <?php   ?> -->
		<?php
// include_once('dbconnect.php');
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

$sql = "SELECT * FROM `ingredient` INNER JOIN relation1 ON ingredient.ing_id=relation1.ing_id WHERE ing_name  LIKE '%$q%' ORDER BY tl_time ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
?>
<div class="container">
<div><span class="help-block">

  <?php
if ($rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ing_id"]. " - Name: " . $row["ing_name"]. "<br>". "rec_id" . $row["rec_id"]. "<br>". $row["rec_name"]. "<br>"   ." total prep time " . $row["tl_time"]. " min". "<br>". "<br>";
    }
} else {
    echo "0 results";
}



	// $query = "SELECT * FROM recipe WHERE rec_name LIKE '%$q%'";


	// $count = mysqli_num_rows($query);
	// if($count == "0")
	// {
	// 	$output = '<h2>No result found!</h2>';
	// }else{
	// 	while($row = mysqli_fetch_assoc($query)) {
 //        echo "id: " . $row["rec_id"]. " - Name: " . $row["rec_name"]. "<br>". "Steps:" . $row["steps"]. "<br>";
 //    }
//		}
	}
?></span></div>
	</body>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>










