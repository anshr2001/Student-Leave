



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

  $studentroll = $_POST['studentroll'];
  $studentid = $_POST['studentid'];
  
  $studentpassword = $_POST['studentpassword'];
  $updatedpassword = $_POST['update_password'];



  //Connection
  $conn = new mysqli('localhost','root','','student');
  if($conn->connect_error)
  {
    die('Connection Failed :'.$conn -> connect_error);
  }
  else
  {

  	$sql = "SELECT * FROM studentdetails WHERE studentroll = '$studentroll' AND studentid = '$studentid' AND studentpassword = '$studentpassword' ";
    $result = mysqli_query($conn, $sql);

 
    if(mysqli_num_rows($result) === 1)
    {
        $row = mysqli_fetch_assoc($result);
        if(($row['studentid'] === $studentid) && ($row['studentpassword'] === $studentpassword) && ($row['studentroll'] === $studentroll))
        {
        	$conn1 = new mysqli('localhost','root','','student');
        	$stmt = $conn1->prepare("UPDATE studentdetails SET studentpassword = '$updatedpassword' WHERE studentroll = '$studentroll' AND studentid = '$studentid' AND studentpassword = '$studentpassword'");

    		$stmt->execute();
    		$stmt->close();

    		echo "<div align=center> Updated the Password Successfully </div>";
  	
    		echo "";

    		$sql1 = "SELECT * FROM studentdetails WHERE studentroll = '$studentroll'";

    		$result1 = mysqli_query($conn1, $sql1);

    		echo "<br>";
    		echo "<strong> Details After Password Updation </strong>";
    		echo "<br>";
    		echo "<table border='1'>
          		<tr>
          		<th>Student Roll No</th>
          		<th>Student Password</th>
          		<th>Student ID</th>
          		<th>Student Name</th>
          		<th>Gender</th>
          		<th>Age</th>
          		<th>Phone Number</th>
          		<th>Email</th>
          		</tr>";


    		while($row = mysqli_fetch_array($result1) )
    		{
        		echo "<tr>";
        		echo "<td> " . $row['studentroll'] . "</td> ";
        		echo "<td> " . $row['studentpassword'] . "</td> ";
        		echo " <td>" . $row['studentid'] . "</td>";
        		echo "<td>" . $row['studentname'] . "</td>";
        		echo "<td>" . $row['gender'] . "</td>";

        		echo "<td>" . $row['age'] . "</td>";
        		echo "<td>" . $row['phone_no'] . "</td>";
        		echo "<td>" . $row['pemail'] . "</td>";
        		echo "</tr>";
    		}
    		echo "</table>";

    		echo "<hr size = 3 noshade color = red>";
    		echo "<div align = center> <strong> Leave Management System </strong> </div>";
    		echo "<div align = center> <strong> Amrita Vishwa Vidyapeetham </strong> </div>";
    		echo "<div align = center> <strong> Coimbatore</strong> </div>";
    		echo "<hr size = 3 noshade color = red>";
        }

        else
        {
        	echo "<h2> Student Roll number, Username and Password doesn't Match </h2>";
        }
    }
    else
    {
    	echo "<h2> Student Roll number, Username and Password doesn't Match </h2>";
    }

    $conn->close();
    //header("Location: success.html");
  }


 ?>
