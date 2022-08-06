<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- link Swiper CSS-->
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  
</head>
<body>
	<!--Navigation bar starts here-->
	<?php include 'navigation.php'; ?>
<!--Ends here-->



<!-- Carasol Starts here-->
<!--<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/everything-everywhere-all-at-once-.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Everything Everywhere All at Once</h3>
        <p>The best movie of 2022</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/thor.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Thor..Love and Thunder</h3>
        <p>Marvel Studios</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/DoctorStrange.jpeg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Doctor Strange</h3>
        <p>Marvel Studios</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
-->
<!--Ends here-->

<!--HOME -->
<section class="home container" id="home">
  <img src="images/thor.jpg" alt="" class="home-img">
  <div class="home-text">
  <h1 class="home-title">Thor<br>Love and Thunder</h1>  
  <p>Releasing 10 april</p>  
  <a href="#" class="watch-btn">
  <i class='bx bx-right-arrow'></i>
   <span>Watch the Trailer</span>
  </a>
 
  </div>
</section>
<!--Home ends here-->

<!--Popular movies -->
<section class="popular container py-3" id="popular">
  <!--Popular Movies heading-->
  <div class="heading">
    <h2 class="heading-title">Popular Movies</h2>
  </div>
  <!-- Content goes here-->
  <div class="popular-content swiper">
       <div class="swiper-wrapper">
        <!-- Movies Box 1-->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="images/doctor strange.jpeg" alt="" class="movie-box-img">
            <div class="box-text">
              <h2 class="movie-title">Doctor Strange</h2>
              <span class="movie-type">Action</span>
              <a href="#" class="watch-btn play-btn">
              <i class='bx bx-right-arrow'></i>
           </a>
            </div>
          </div>
        </div>
          <!-- Movies Box 2-->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="images/spider man.jpg" alt="" class="movie-box-img">
            <div class="box-text">
              <h2 class="movie-title">Spider Man No Way Home</h2>
              <span class="movie-type">Action</span>
              <a href="#" class="watch-btn play-btn">
              <i class='bx bx-right-arrow'></i>
           </a>
            </div>
          </div>
        </div>
          <!-- Movies Box 3-->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="images/minions.jpg" alt="" class="movie-box-img">
            <div class="box-text">
              <h2 class="movie-title">Minions The Rise of GRU</h2>
              <span class="movie-type">Action</span>
              <a href="#" class="watch-btn play-btn">
              <i class='bx bx-right-arrow'></i>
           </a>
            </div>
          </div>
        </div>
          <!-- Movies Box 4-->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="images/jurassic world.jpg" alt="" class="movie-box-img">
            <div class="box-text">
              <h2 class="movie-title">Jurassic World Dominion</h2>
              <span class="movie-type">Action</span>
              <a href="#" class="watch-btn play-btn">
              <i class='bx bx-right-arrow'></i>
           </a>
            </div>
          </div>
        </div>
          <!-- Movies Box 5-->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="images/jurassic world.jpg" alt="" class="movie-box-img">
            <div class="box-text">
              <h2 class="movie-title">Jurassic World Dominion</h2>
              <span class="movie-type">Action</span>
              <a href="#" class="watch-btn play-btn">
              <i class='bx bx-right-arrow'></i>
           </a>
            </div>
          </div>
        </div>
          <!-- Movies Box 4-->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="images/jurassic world.jpg" alt="" class="movie-box-img">
            <div class="box-text">
              <h2 class="movie-title">Jurassic World Dominion</h2>
              <span class="movie-type">Action</span>
              <a href="#" class="watch-btn play-btn">
              <i class='bx bx-right-arrow'></i>
           </a>
            </div>
          </div>
        </div>
          <!-- Movies Box 4-->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="images/jurassic world.jpg" alt="" class="movie-box-img">
            <div class="box-text">
              <h2 class="movie-title">Jurassic World Dominion</h2>
              <span class="movie-type">Action</span>
              <a href="#" class="watch-btn play-btn">
              <i class='bx bx-right-arrow'></i>
           </a>
            </div>
          </div>
        </div>
          <!-- Movies Box 4-->
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="images/jurassic world.jpg" alt="" class="movie-box-img">
            <div class="box-text">
              <h2 class="movie-title">Jurassic World Dominion</h2>
              <span class="movie-type">Action</span>
              <a href="#" class="watch-btn play-btn">
              <i class='bx bx-right-arrow'></i>
           </a>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</section>
<!--Popular Movies ends here-->









<!--About Us starts here-->
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About us</h2>
	</div>

	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
		<img src="images/aboutUs.jpg" class="img-fluid aboutimg">
	</div>
	<div class="col-lg-6 col-md-6 col-12">
		<h2 class="display-4">I am Bhawana</h2>
		<p class="py-3">Movie suggestion is a world wide website located in Nepal. It is a collaborative filtering or content based recommendation technique where movie titles are recommended to users based on their choices. With this recommendation technique you will be able to find suitable list of movies which others have liked. This is how collaborative filtering system works, it recommends you shows based on the similar shows watched by others.
		</p>
		<a href="about.php" class="btn btn-success">Check more</a>
	</div>
</div>
</div>
</section>
<!--Ends here-->

<!--Our Services starts here-->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="images/cc2.jpg" alt="Card image">
            <div class="card-body">
               <h4 class="card-title">movies :)</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
      </div>
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="images/cc2.jpg" alt="Card image">
            <div class="card-body">
               <h4 class="card-title">movies :)</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
      </div>
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="images/cc2.jpg" alt="Card image">
            <div class="card-body">
               <h4 class="card-title">movies :)</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Ends here-->
<!--Our gallary starts here-->
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Gallary</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/adventurous1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/movie2.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/movie4.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/horror1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/zombie1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/romantic1.jpg" class="img-fluid pb-4">
			</div>
		</div>
	</div>
	</section>
	<!--Ends here-->

<!--Contact us starts here-->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact us</h2>
  </div>

  <div class="container">
     <div class="alert alert-success text-center"> 
        <?php if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            $_SESSION['message']="";
          }
        ?> 
      </div> 


  <div class="w-50 m-auto">
    <form action="database.php" method="post">
      <div class="form-group"> 
        <label>Username</label>
        <input type="text" name="user_name" class="form-control" >
      </div>
            <div class="form-group"> 
        <label>Email</label>
        <input type="email" name="email" class="form-control" >
      </div>
            <div class="form-group"> 
        <label>Phone no</label>
        <input type="number" name="phoneno" class="form-control" >
      </div>
            <div class="form-group"> 
        <label>Comments</label>
        <textarea type="text" name="comments" class="form-control" ></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>
<!--Ends here-->
<!--Footer Starts here-->
<!--<footer>
	<p class="p-3 bg-dark text-white text-center">bhawana.shrestha@apexcollege.edu.np</p>
</footer>-->


<section class="footer">

    <div class="box-container p-3 bg-dark text-white">

      

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +9779844098259 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i>bhawana.shrestha@apexcollege.edu.np </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i>Mid-Baneshwor,Kathmandu </a>
        </div>

     

        <div class="box">
            <input type="email" placeholder="your email" class="email">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="popup" onclick="window.open('https://mail.google.com/mail/u/0/#inbox?compose=new','name','width=800,height=500')">
            <input type="submit" value="Email us" class="btn btn-success">
            </a>
        </div>

    </div>
</section>
<!--Ends here-->

<!-- link Swiper JS-->
<script src="js/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>