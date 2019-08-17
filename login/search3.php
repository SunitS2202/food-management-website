
<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
	</head>
	<body>
		<form method="POST" action="search1.php">
			<input type="text" name="q" placeholder="query">
			<input type="submit" name="search" value="Search">
		</form>
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

$sql = "SELECT * FROM `ingredient` INNER JOIN relation ON ingredient.ing_id=relation.ing_id WHERE ing_name  LIKE '%$q%'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
if ($rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ing_id"]. " - Name: " . $row["ing_name"]. "<br>". "rec_id" . $row["rec_id"]. "<br>";
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
?>
	</body>
</html>










