<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "advert_consult";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $sql = "SELECT * FROM media_buyer WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();
  $_SESSION['userData'] = $row;
  header('location: ./dashboard/md.php');
} else {
  echo "0 results";
}

die();
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $sql = "SELECT * FROM media_buyer WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();
  $_SESSION['userData'] = $row;
  header('location: ./dashboard/md.php');
} else {
  echo "0 results";
}

die();
}// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $sql = "SELECT * FROM media_buyer WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();
  $_SESSION['userData'] = $row;
  header('location: ./dashboard/md.php');
} else {
  echo "0 results";
}

die();
}// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $sql = "SELECT * FROM media_buyer WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();
  $_SESSION['userData'] = $row;
  header('location: ./dashboard/md.php');
} else {
  echo "0 results";
}

die();
}// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email'])) {
    $company_email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $sql = "SELECT * FROM media_owner WHERE email = '$company_email' AND password = '$password'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();
  $_SESSION['userData'] = $row;
  header('location: ./dashboard/od.php');
} else {
  echo "page not found";
}

die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdvertS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <style>
        .banner {
            background-image: url('https://picsum.photos/200/300');
            width: 100%;
            object-fit: cover;
            background-repeat:no-repeat;
            background-size: cover;
        }
        .overley {
            background: #42000000;
        }
        ul li {
            display: inline-block;
        }
        .fab {
            margin: 50px;
            width: 100px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Advert Consult</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="C:\xampp\htdocs\advertTwo\index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="C:\xampp\htdocs\advertTwo\About.php">About Us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="C:\xampp\htdocs\advertTwo\Price.php">Pricing</a>
              </li>

            <li class="nav-item">
                <a class="nav-link" href="C:\xampp\htdocs\advertTwo\services.php">Services</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="reg.php">Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="C:\xampp\htdocs\advertTwo\js\track.php">Tracking</a>
            </li>
        
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <div class="container">
        <div class="banner">
            <div class="overley">
                <div class="row">
                    <div class="col-md-4" style="padding: 100px;background:rgba(255, 255, 255, 0.5);">
                    
                        <form action="index.php" method="post" class="text-center">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input name="email" type="text" required />
                            </div>

                            <div class="form-group">
                                <label for="email">Password:</label>
                                <input name="password" type="password" required />
                            </div>

                            <a href="#">Forgot password</a>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4" style="padding: 100px">
                        <button class="btn btn-info">
                            Media Owner
                        </button>
                    </div>
                    <div class="col-md-4" style="padding: 100px">
                        <button class="btn btn-info">
                            Media Buyer
                        </button>
                    </div>
                </div>
            </div>
        </div> 

        <div class="row" style="background: #D4DEFF;">
            <div class="col-md-12">
                <div class="wrapper text-center">
                    <h1>Partners</h1>
                    <p>Media icon that are in partner with us</p>
                    <div>
                        <ul>
                            <li><i class="fab fa-facebook" style="color:black;"></i></li>
                            <li><i class="fab fa-instagram" aria-hidden="true"></i></li>
                            <li><i class="fab fa-whatsapp" aria-hidden="true"></i></li>
                            <li><i class="fab fa-github" aria-hidden="true"></i></li>
                            <li><i class="fab fa-twitter-square" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4">
                <h3>
                    Best Way to Advertice
                </h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                     been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                     desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="col-md-4">
                <h3>
                    Client Testimony
                </h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                     been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                     desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="col-md-4">
                <h3>
                    Tracking  Procedure Details
                </h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                     been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                     desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div> 

        <div class="row text-center" style="background: #f8f8f8;padding: 50px;">
            <div class="col-md-6">
                <img src="https://picsum.photos/200/300" height="350px" width="350px" alt="">
            </div>
            <div class="col-md-6">
                <h3>
                    Title Here
                </h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                     been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                     desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        
        </div> 

        <footer>
            <div class="row text-center">
                <div class="col-md-3">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                         
                    </p>
                </div>
                <div class="col-md-3">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                         
                    </p>
                </div>
                <div class="col-md-3">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                         
                    </p>
                </div>
                <div class="col-md-3">
                    <h1>Contact Address</h1>
                    <p>20, Chriot Street,<br/>Openshaw,<br/> Manchester. <br/> Postcode<br/>M11 1DP</P>
                </div>
            </div> 
        </footer>

    </div>
</body>
</html>