
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- google fonts -->
  	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:ital,wght@1,300&family=Roboto:wght@300&display=swap" rel="stylesheet">
  	<!-- Font Awesome -->
  	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  	<!-- favicon -->
  	<link rel="icon" href="css/images/favicon.ico">
  	<!-- custom css -->
  	<link rel="stylesheet" href="css/styles.css">
	<title>Leave Application</title>

</head>
<body>
	<section>
    	<div class="">
      	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <!-- apollo symbol -->
        <img src="css/images/amritafinal.svg" class="logo-1" alt="logo">
        <!-- apollo x title -->
        <h1 class="logo-2"> ALMS - Leave Options</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#shrink">
        	<span class="navbar-toggler-text"> Menu </span>
        </button>
        
        <div class="collapse navbar-collapse" id="shrink">
        <ul class="navbar-nav ml-auto">
        	<li class="nav-item">
        		<a class="nav-link" href="login.html"> Previous </a>
        	</li>

        	<li>
        		<a class="nav-link" href="index.html"> Log-out </a>
        	</li>

        </ul>
        </div>
      </nav>
    </div>
  </section>

  <section>
    <div id="gallery" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
      <ol class="carousel-indicators">
        <li data-target="#gallery" data-slide-to="0" class="active"></li>
        <li data-target="#gallery" data-slide-to="1"></li>
        <li data-target="#gallery" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!-- all images in carousel use the class cropped -->
          <img src="studentleave.webp" class="d-block w-100 size cropped" alt="main">
        </div>
    </div>
  </div>
  </section>

<section>

  <div class="bg">
    <br>
    <a href="apply.html"> 

      <button type="submit" name="leaveapplication" class='button'><span>Apply a Leave</span></button>
    </a>

    <p>    Students can apply leave by providing the details like type of leave, starting date,number of days and can get approvedby a particular admin </p>

    
    <br>
    <a href="update_profile.html"> 
      <button type="submit" name="profileupdate" class='button'><span>Update my profile</span></button>
    </a>

    <p>    Students can Update their profile by providing the personal details including username, roll number, password, name etc...</p>

    <br>
    <a href="update_password.html"> 

      <button type="submit" name="passwordupdate" class='button'><span>Update Password</span></button>
    </a>

    <p>    Students can Update their their by providing the username, roll number, current password and save their new password to the database</p>

    <br>

  </div>
</section> 

<footer class="bg-danger text-center spacing-2">
  <div id="contact">
    <i class="social-icon fab fa-facebook-f"></i>
    <i class="social-icon fab fa-twitter"></i>
    <i class="social-icon fab fa-instagram"></i>
    <i class="social-icon fas fa-envelope"></i>
    <p class="dev">© C12 - Leave</p>
  </div>
</footer>

</body>
</html>

