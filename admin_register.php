

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
  <title>Leave Management System</title>
</head>

<body>
  <!-- navigation bar background-danger -->
  <section>
    <div class="">
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <!-- apollo symbol -->
        <img src="css/images/amritafinal.svg" class="logo-1" alt="logo">
        <!-- apollo x title -->
        <h1 class="logo-2"> Leave Management System</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#shrink">
          <span class="navbar-toggler-text"> Menu </span>
        </button>
        <div class="collapse navbar-collapse" id="shrink">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="admin_register.html"> Previous </a>
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
  <!-- <h2 align = "center"> Patients List </h2> -->

  <hr size = "3" noshade color = "red">

  <?php $PHP_SELF;?>
</body>
</html>



<?php

  $adminid = $_POST['adminid'];
  $adminpassword = $_POST['adminpassword'];
  $adminname = $_POST['adminname'];
  $adminphone_no = $_POST['adminphone_no'];
  $adminemail = $_POST['adminemail'];

  //Connection
  $conn = new mysqli('localhost','root','','student');
  if($conn->connect_error)
  {
    die('Connection Failed :'.$conn -> connect_error);
  }
  else
  {
    $sql = "SELECT * FROM admindetails WHERE adminid = '$adminid'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) != 1)
    {
      $stmt = $conn->prepare("INSERT INTO admindetails(adminid, adminpassword, adminname,adminphone_no, adminemail) VALUES (?,?,?,?,?)");

      $stmt->bind_param("sssis", $adminid, $adminpassword, $adminname, $adminphone_no, $adminemail);

      $stmt->execute();

      echo "Admin registration is Successfull";

      $stmt->close();

      $conn->close();
      //header("Location: success.html");
    }
    else
    {
      echo "Username is already taken!! Try registering with new Username";
    }
    
  }


 ?>
