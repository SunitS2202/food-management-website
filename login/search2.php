
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
                                <form method="POST" action="search2.php">
                                	 <input type="text" name="t" class="form-control" placeholder="Recipe Name..." required="">
                                	 <br>
                                  <input type="text" name="q" class="form-control" placeholder="Recipe Name..." required="">
                                  <!-- <br> -->
                                  <!-- <input type="text" name="t" class="form-control" placeholder="Recipe Name..." required=""> -->
                                  <button type="submit" class="form-control" name="search" value="Search"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- <form method="POST" action="search2.php">
            <input type="text" name="q" placeholder="query">
            <input type="text" name="t" placeholder="query">
            <input type="submit" name="search" value="Search">
        </form> -->
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
		<!-- <form method="POST" action="search1.php">
			<input type="text" name="t" placeholder="query">
			<input type="submit" name="search" value="Search">
		 </form>-->
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
	$t = $_POST['t'];
echo " 1st element search -------------";
$sql = "SELECT * FROM `ingredient` INNER JOIN relation1 ON ingredient.ing_id=relation1.ing_id WHERE ing_name  LIKE '%$q%' ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
?>
<div class="container">
<div><span class="help-block">
	<?php
if ($rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ing_id"]. " - Name: " . $row["rec_name"]. "<br>". "rec_id" . $row["rec_id"]. "<br>";
    }
} else {
    echo "0 results";
}

echo " 2nd ellement search------------------------ ". "<br>";

$sql1 = "SELECT * FROM `ingredient` INNER JOIN relation1 ON ingredient.ing_id=relation1.ing_id WHERE ing_name  LIKE '%$t%' ";
$result1 = mysqli_query($conn, $sql1);
$rows1 = mysqli_num_rows($result1);

if ($rows1 > 0) {
    // output data of each row
    while($rowx = mysqli_fetch_assoc($result1)) {
        echo "id: " . $rowx["ing_id"]. " - Name: " . $rowx["rec_name"]. "<br>". "rec_id" . $rowx["rec_id"]. "<br>";
    }
} else {
    echo "0 results";
}

echo "------------ common ------------------- ". "<br>";


 // $sql = "SELECT * FROM `ingredient` INNER JOIN relation1 ON ingredient.ing_id=relation1.ing_id WHERE ing_name  LIKE '%$t%' ";
 // $result1 = mysqli_query($conn, $sql1);
// $rows = mysqli_num_rows($result1);

$sql = "SELECT * FROM `ingredient` INNER JOIN relation1 ON ingredient.ing_id=relation1.ing_id WHERE ing_name  LIKE '%$q%' ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);

$sql = "SELECT * FROM `ingredient` INNER JOIN relation1 ON ingredient.ing_id=relation1.ing_id WHERE ing_name  LIKE '%$t%' ";
$result1 = mysqli_query($conn, $sql);
$rows1 = mysqli_num_rows($result1);

$cont=$rows;
$cont1=$rows1;

if ($cont > 0 && $cont1>0) {
    // output data of each row
    for ($cont = $rows; $cont > 0; $cont--) {
        $row = mysqli_fetch_assoc($result1);
    	 $temp1=$row["rec_name"];
        echo  $temp1 ."<br>";
    	 
    	 
    	for ($cont1 = $rows1; $cont1 > 0; $cont1--) {
            $rowx = mysqli_fetch_assoc($result1);
    		 $temp2=$rowx["rec_id"];
         echo  $rowx["rec_name"]."<br>";
    		 
    		if ($temp2 == $temp1) {
    			// $rowx = mysqli_fetch_assoc($result);
    		  // echo "id: " . $rowx["ing_id"]. " - Name: " . $rowx["rec_name"]. "<br>". "rec_id" . $rowx["rec_id"]. "<br>";

               // echo "$temp1 ". $temp1."$temp2 <br> :".$temp2;
                // echo "string";
               // echo  "same   :".$row["rec_id"]. "<br>";
               
    		}
    		// else
    		// { echo "no item";}
    	
        }
        

        
    }
} else {
    echo "0 results";
}

echo "------------------------------end------------";


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
</span></div>
	</body>
</html>










