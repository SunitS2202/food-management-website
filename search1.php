
<!DOCTYPE html>
<html>
	<head>
		<title>Search Recipe </title>
		 <link rel="stylesheet" type="text/css" href="./css/searchCss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	</head>
	<body>
		<div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <!-- <input class="search_input" type="text" name="" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a> -->
          <form method="POST" action="search1.php">
			<input type="light_text" name="q" placeholder="ingredient name">
			<input type="submit" name="search" value="Search">
		</form>
        </div>
      </div>
    </div>
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

$sql = "SELECT * FROM `ingredient` INNER JOIN relation1 ON ingredient.ing_id=relation1.ing_id WHERE ing_name  LIKE '%$q%' ORDER BY tl_cal ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
?>
<div class="container">
<div><span class="help-block"><?php
if ($rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ing_id"]. " - Name: " . $row["ing_name"]. "<br>". "rec_id" . $row["rec_id"]. "<br>". $row["rec_name"]. "<br>"   ." total calories " . $row["tl_cal"]. "<br>". "<br>";
        
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
<!-- 
<div class="container">
<div><span class="help-block"><?php echo $st; ?></span></div>
</div>
<div class="container">
<div><span class="help-block"><?php echo $s; ?></span></div>
</div> -->


	</body>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>










