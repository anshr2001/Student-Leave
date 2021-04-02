
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
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
  <!-- webpage title -->
  <title>ALMS - Apply Leave</title>
</head>

<body>
  <!-- navigation bar background-danger -->
  <section>
    <div class="">
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <!-- apollo symbol -->
        <img src="css/images/amritafinal.svg" class="logo-1" alt="logo">
        <!-- apollo x title -->
        <h2 class="logo-2"> Leave Management System </h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#shrink">
          <span class="navbar-toggler-text"> Menu </span>
        </button>
        <div class="collapse navbar-collapse" id="shrink">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="login.html"> Previous </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="index.html"> Logout </a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </section>
  <h1 align="center">ALMS - Apply Leave </h1>

  <hr size = "3" noshade color = "red">

  <?php $PHP_SELF;?>
</body>
</html>



<?php
  
  $username = $_POST['uname'];
  $password = $_POST['pass'];
  

  if(empty($_POST['user']))
  {
    echo "Choose the User";
  }

  else
  { 
    $login = $_POST['user'];

    $conn = new mysqli('localhost','root','','student');
      

      if($conn->connect_error)
      {
        die('Connection Failed :'.$conn -> connect_error);
      }
      else
      {
        if($login === 'student')
        {
            $sql = "SELECT * FROM studentdetails WHERE studentid = '$username' AND studentpassword = '$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1)
            {
              $row = mysqli_fetch_assoc($result);
              if($row['studentid'] === $username && $row['studentpassword'] === $password)
              {
                  echo "<h1> Log in Successful </h1>";
                  header("Location: apply_leave.php");
              }
              else
              {
                  echo " <h2>Incorrect Username/Password </h2>";
              }
            }
            else
            {
                echo "<h2> Incorrect Username/Password </h2>";
            }
        }
        else if($login === 'admin')
        {
            $sql = "SELECT * FROM admindetails WHERE adminid = '$username' AND adminpassword = '$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1)
            {
              $row = mysqli_fetch_assoc($result);
              if($row['adminid'] === $username && $row['adminpassword'] === $password)
              {
                  echo "<h1> Log in Successful </h1>";
                  header("Location: admin_home.php");
              }
              else
              {
                  echo " <h2>Incorrect Username/Password </h2>";
              }
            }
            else
            {
                echo "<h2> Incorrect Username/Password </h2>";
            }
        }

      }
  }
?>




