



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
  <title>Update Profile ALMS</title>
</head>

<body>
  <!-- navigation bar background-danger -->
  <section>
    <div class="">
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <!-- apollo symbol -->
        <img src="css/images/amritafinal.svg" class="logo-1" alt="logo">
        <!-- apollo x title -->
        <h1 class="logo-2"> Leave Management System </h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#shrink">
          <span class="navbar-toggler-text"> Menu </span>
        </button>
        <div class="collapse navbar-collapse" id="shrink">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="apply_leave.php"> Previous </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="index.html"> Logout </a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </section>
  <h1 align="center">Leave Management System </h1>
  <h2 align = "center"> Details </h2>

  <hr size = "3" noshade color = "red">

  <?php $PHP_SELF;?>
</body>
</html>


<?php

  $leavestartdate = $_POST['leavestartdate'];
  $numdays = $_POST['numdays'];
  $leavetype = $_POST['leavetype'];

  $studentroll = $_POST['studentroll'];
  $studentpassword = $_POST['studentpassword'];

  



  //Connection
  $conn = new mysqli('localhost','root','','student');
  if($conn->connect_error)
  {
    die('Connection Failed :'.$conn -> connect_error);
  }
  else
  {
    $sql = "SELECT * FROM studentdetails WHERE studentroll = '$studentroll' AND studentpassword = '$studentpassword'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1)
    {
      $stmt = $conn->prepare("INSERT INTO leavedetails(leavestartdate, numdays, leavetype, studentroll) VALUES (?,?,?,?)");

      $stmt->bind_param("siss", $leavestartdate, $numdays, $leavetype, $studentroll);

      $stmt->execute();

      echo "<h1> Applied Leave Successfully </h1>";

      $stmt->close();

      $conn->close();
      //header("Location: success.html");
    }
    else
    {
      echo "<h1> Username and Password doesn't Match </h1>";
    }
    
  }


 ?>
