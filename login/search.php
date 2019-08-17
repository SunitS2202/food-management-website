
<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/vegas.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
	</head>
	<body>
		 <section id="home">
        <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="home-info">
                              <div class="subscribe-form">
                                <form method="POST" action="search.php">
                                  <input type="text" name="q" class="form-control" placeholder="Recipe Name..." required="">
                                  <button type="submit" class="form-control" name="search" value="Search"><i class="fa fa-search"></i></button>
                                </form>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
<!-- 
		<form method="POST" action="search.php">
			<input type="text" name="q" placeholder="recipe name">
			<input type="submit" name="search" value="Search">
		</form>  -->

	

<?php
// include_once('dbconnect.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$st="";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
 $dbcon = mysqli_select_db($conn,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['search'])){
	$q = $_POST['q'];

$sql = "SELECT * FROM recipe WHERE rec_name LIKE '%$q%' ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
?>
<div class="container">
<div><span class="help-block">

  <?php
if ($rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["rec_id"]. " - Name: " . $row["rec_name"]. "<br>". "Steps:" . $row["steps"]. "<br>"."<br>"."<br>"." - calorie: " . $row["calorific_value"]. "<br>"."<br>"."<br>"." total calories : "."<br>". $row["tl_cal"]. "<br>";
          // $st=$row["steps"];
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
<!-- <div class="container">
<div><span class="help-block"><?php echo $st; ?></span></div>
</div>
 -->	</body>
</html>










