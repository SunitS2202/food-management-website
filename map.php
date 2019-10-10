
<html>
<head>
  
  <title>Google Maps Multiple Markers</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/vegas.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
</head>
<body>
  <div id="map" style="height: 600px; width: 100%;">
</div>
<script type="text/javascript">
    var locations = [
      ['Maharashtra – Misal Pav', 19.663280 ,75.300293, 4],
      ['Bihar – Litti Chowkha', 25.199350 ,85.517609, 5],
      ['West Bengal – Kosha Mangsho', 22.978624 ,87.747803, 3],
      ['Gujarat – Dhokla', 22.309425 , 72.136230, 2],
      ['Tamil nadu – Pongal', 11.127123 ,78.656891, 1],
      ['Telangana – Chicken Biryani', 17.874857 ,78.100815, 1],
      
      ['Odisha – Chenna Poda ', 20.940920 , 84.803467, 4],
      ['Kerala – Appam', 10.850516 , 76.271080, 1],
      ['Uttar Pradesh – Kabab', 28.207609 ,79.826660, 1],
      ['Punjab – Makki Di Roti & Sarson Da Saag', 25.895248, 81.939369, 1],
      ['Himachal Pradesh – Dham', 32.084206 ,77.571167, 1],
      ['Chhatisgarh – Chila', 21.2787 ,81.8661, 1]
    ];
    

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: new google.maps.LatLng(20, 83),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
           infowindow.setContent(locations[i][0]  );
          infowindow.open(map, marker);

        }
      })(marker, i));
    }
  </script>
  <section id="home">
        <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="home-info">
                              <div class="subscribe-form">

                                  <form method="POST" action="map.php">
                                      <input type="light_text" name="q" placeholder="ingredient name">
                                      <input type="submit" name="search" value="Search">
                                    </form>
                                    </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
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
<div><span class="help-block"><?php
if ($rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["rec_id"]. " - Name: " . $row["rec_name"]. "<br>". "Steps:" . $row["steps"]. "<br>"." - calorie: " . $row["calorific_value"]. "<br>"." total calories : ". "<br>". $row["tl_cal"]. "<br>";
          // $st=$row["steps"];
    }
} else {
    echo "0 results";
}



  // $query = "SELECT * FROM recipe WHERE rec_name LIKE '%$q%'";


  // $count = mysqli_num_rows($query);
  // if($count == "0")
  // {
  //  $output = '<h2>No result found!</h2>';
  // }else{
  //  while($row = mysqli_fetch_assoc($query)) {
 //        echo "id: " . $row["rec_id"]. " - Name: " . $row["rec_name"]. "<br>". "Steps:" . $row["steps"]. "<br>";
 //    }
//    }
  }
?></span></div>
</body>
</html>













