<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdvertS Dashboard</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    
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
                <a class="nav-link" href="Price.php">Pricing</a>
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
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
          </form>
        </div>
      </nav>


    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-md-6">
                <div class="card">
                   <div class="card-body">
                        <h1>Welcome back, <?php echo $_SESSION['userData']['first_name']; ?></h1>
                   </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                   <div class="card-body">
                        <h1>hello, you're on owner dashboard, please kinly check out for any update on your page.</h1>

                        <form action="#" method="post">
                           
                        </form>
                   </div>
                </div>
            </div>
        
        </div>
    </div>
</body>
</html>