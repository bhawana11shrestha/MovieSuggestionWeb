<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
	<?php include 'navigation.php'; ?>
		<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact us</h2>
	</div>
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
<footer>
	<p class="p-3 bg-dark text-white text-center">bhawana.shrestha@apexcollege.edu.np</p>
</footer>

</body>
</html>