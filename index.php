<!DOCTYPE html>
<html>
<head>
<title>Food Recipie Website</title>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
  <link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<!-----NavigationBar---->
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
  <a class="nav-link" href="#"> <p style = "font-family:broadway;font-size:22px;font-style:bold;">
         CASOMIDA
      </p></a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#top">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="#news">NEWS</a>
		<li class="nav-item">
        <a class="nav-link"href="#testimonials">TESTIMONIALS</a>
      </li>
		<li class="nav-item">
        <a class="nav-link"href="./login/welcome.php">LOGIN | SIGN UP</a>
      </li>
    </ul>
  </div>
</nav>
</section>
<!------slider----->
<div id="slider">
<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block img-fluid" src="img/back3.jpg" >
	    <div class="carousel-caption">
	       <h5>Are You Hungry?</h5>
	    </div>
    </div> 
  <div class="carousel-item">
      <img class="d-block img-fluid" src="img/back2.jpg" >
	  <div class="carousel-caption">
	     <h5>Search Delicious Recipies</h5>
	  </div>
   </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/back1.jpg">
	  <div class="carousel-caption">
	     <h5>Explore More</h5>
	  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<section id="about">
<div class="container">
   <div class="row">
    <div class="col-md-16">
	  <h2>About Us</h2>
	  <div class="about-content">
	  Casomida is the one stop destination for people looking for easy food recipies on one click.
	  It helps the user to browse through a variety of dishes and informs the user about it's calorie content.
	  This website lets you navigate and brainstorm in number of ways.
	  for instance,check out the Ideas section to checkout the meal inspiration.
	  collection area includes recipe ideas for healthy breakfasts,healthy snacks,meat free meals,soups,low carbs and many more!Most recipies come with their nutitional facts that includes the number of calories per serving.
	  </div>
	  <button type="button" class="btn btn-primary">Read more>>
	  </button>
	</div>
	</div>
	<div class="col-md-6 skills-bar">
	<p>Nutrition Values</p>
	<div class="progress">
	    <div class="progress-bar" style="width: 80%;">80%</div>
	</div>
	<p>Calorific Values</p>
	<div class="progress">
	    <div class="progress-bar" style="width: 85%;">85%</div>
	</div>
	<p>Customer Experience</p>
	<div class="progress">
	    <div class="progress-bar" style="width: 90%;">90%</div>
	</div>
	<p>Customer Feedback</p>
	<div class="progress">
	    <div class="progress-bar" style="width: 80%;">80%</div>
	</div>
</div>	
</div>
</div>	
</section>
  <!-------Servies------>
  <section id="services">
   	<div class="container">
	    <h1>Our Services</h1>
		<div class="row services">
		     <div class="col-md-3 text-center">
			     <div class="icon">
				 <i class="fa fa-cutlery" aria-hidden="true"></i>
                </div> 
				<h3>Food Recipies</h3>
				<p>Casomida is the one stop destination for people looking for easy food recipies on one click.</p>
	        </div>	
			<div class="col-md-3 text-center">
			     <div class="icon">
				 <i class="fa fa-diamond" aria-hidden="true"></i>
                </div> 
				<h3>Ingredient Search</h3>
				<p>Casomida can find all the ingredients required to prepare a recipie by entering any one ingridient.</p>
	        </div>	
			<div class="col-md-3 text-center">
			     <div class="icon">
				<i class="fa fa-cubes" aria-hidden="true"></i>
                </div> 
				<h3>Calorific Values</h3>
				<p>Casomida helps the user to browse through a variety of dishes and informs the user about it's calorie content.</p>
	        </div>	
			<div class="col-md-3 text-center">
			     <div class="icon">
			     <i class="fa fa-hourglass-start" aria-hidden="true"></i>
                </div> 
				<h3>Prep time & Budget</h3>
				<p>Casomida provides the preparation time for the recipies with an effective budget to make the meal.</p>
	        </div>	
        </div>	 
	</div>
  </section>
<section id="news">
<div class="container">
   <div class="row">
    <div class="col-md-16">
	  <h2>News</h2>
	  <div class="news-content">
	  Casomida is the one stop destination for people looking for easy food recipies on one click.
	  It helps the user to browse through a variety of dishes and informs the user about it's calorie content.
	  This website lets you navigate and brainstorm in number of ways.
	  for instance,check out the Ideas section to checkout the meal inspiration.
	  collection area includes recipe ideas for healthy breakfasts,healthy snacks,meat free meals,soups,low carbs and many more!Most recipies come with their nutitional facts that includes the number of calories per serving.
	  </div>
	  <button type="button" class="btn btn-primary">Read more>>
	  </button>
	</div>
	</div>
</section>	
  <!-------contact------->
  <section id="contact">
  <div class="container">
     <p>Have Any Querry and Related Problems?</p>
	 <a href="#contact" class="btn btn-primary">Contact Us</a>
	</div> 
</section>	
<!-------Testimonials------->
<section id="testimonials">
<div class="container">
<h1>Testimonials</h1> 
<p class="text-center">Sign Up To Get Full Experience of CASOMIDA</p>
<div class="row">
<div class="col-md-4 text-center">
   <div class="profile">
   <img src="img/user2.jpg" class="user">
   <blockquote>Failure will never overtake me if my determination to succeed is strong enough.The past cannot be changed. The future is yet in your power. ...</blockquote>
   <h3>Simran Akhtar <span>Co-Founder and CEO at Casomida</span></h3> 
   </div>
</div>
<div class="col-md-4 text-center">
   <div class="profile">
   <img src="img/user6.jpg" class="user">
   <blockquote>With the new day comes new strength and new thoughts...</blockquote>
   <h3>Shubhanshu Biswal <span>Co-Founder and COO at Casomida</span></h3> 
   </div>
</div>
<div class="col-md-4 text-center">
   <div class="profile">
   <img src="img/user1.jpg" class="user">
   <blockquote>It does not matter how slowly you go as long as you do not stop...</blockquote>
   <h3>Sunit sulip <span>Co-Founder and CTO at Casomida</span></h3> 
   </div>
</div>
<div class="col-md-4 text-center">
   <div class="profile">
   <img src="img/user3.jpg" class="user">
   <blockquote>Change your life today. Don't gamble on the future, act now, without delay...</blockquote>
   <h3>Aditya Prasad Tripathy <span>Co-Founder and CFO at Casomida</span></h3> 
   </div>
</div>
<div class="col-md-4 text-center">
   <div class="profile">
   <img src="img/user5.jpg" class="user">
   <blockquote>Optimism is the faith that leads to achievement. Nothing can be done without hope and confidence...</blockquote>
   <h3>Ismeet Kour Chhabda <span>Co-Founder and Marketing Head at Casomida</span></h3> 
   </div>
</div>
<div class="col-md-4 text-center">
   <div class="profile">
   <img src="img/user4.jpg" class="user">
   <blockquote>Good, better, best. Never let it rest. 'Til your good is better and your better is best...</blockquote>
   <h3>Soumyajit Bal <span>Co-Founder and Manager at Casomida</span></h3> 
   </div>
</div>
</div>
</section>
<!--------Get in Touch------>
<section id="contact">
<div class="container">
    <h1>Get In Touch</h1>
	<div class="col-md-5">
	    <form class="contact-form">
		     <div class="form-group">
			 <input type="text" class="form-control" placeholder="Your Name">
			 </div>
			 <div class="form-group">
			 <input type="number" class="form-control" placeholder="Phone No.">
			 </div>
			 <div class="form-group">
			 <input type="email" class="form-control" placeholder="Email id">
			 </div>
			 <div class="form-group">
			 <textarea class="form-control" rows="4" 
			 placeholder="Your Message"></textarea>
			 </div>
			     <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
		</form>
	</div>
         <div class="col-md-5contact-info">
            <div class="follow"><label><b>Follow Us:</b></label>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
		    <a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			</div>		 
	
	</div>
	</div>
</section>
<!----------Footer------->
<section id="footer">
     <div class="container text-center">
	     <p>A Food<i class="fa fa-heart-o"></i>Recipie Website</p>
	 </div>	 
</section>
<!------Footer End------->
<script src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>