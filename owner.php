<?php
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


if(isset($_POST['variableCompanyName'])) {
    $companyName = (isset($_POST['variableCompanyName']) ? trim($_POST['variableCompanyName']) : '');
    $companyaddress = (isset($_POST['variablecompanyaddress']) ? trim($_POST['variablecompanyaddress']) : '');
    $companyemail = (isset($_POST['variablecompanyemail']) ? trim($_POST['variablecompanyemail']) : '');
    $password = (isset($_POST['variablepassword']) ? trim($_POST['variablepassword']) : '');
    $companypostcode = (isset($_POST['variablecompanypostcode']) ? trim($_POST['variablecompanypostcode']) : '');
    $companyphonenumber = (isset($_POST['variablecompanyphonenumber']) ? trim($_POST['variablecompanyphonenumber']) : '');
    $companyregistrationnumber = (isset($_POST['variablecompanyregistrationnumber']) ? trim($_POST['variablecompanyregistrationnumber']) : '');
    $sql = "INSERT INTO media_owner (company_name, company_address, company_email, password, company_postcode, company_phone_number,company_registration_number)
    VALUES ('$companyName', '$companyaddress', '  $companyemail', '$password', ' $companypostcode', '$companyphonenumber', '$companyregistrationnumber' )";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    die();
    
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

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
              <a class="nav-link" href="C:\xampp\htdocs\advertTwo\index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="C:\xampp\htdocs\advertTwo\About.html">About Us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="C:\xampp\htdocs\advertTwo\Price.html">Pricing</a>
              </li>

            <li class="nav-item">
                <a class="nav-link" href="C:\xampp\htdocs\advertTwo\services.html">Services</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="C:\xampp\htdocs\advertTwo\owner.php">Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="C:\xampp\htdocs\advertTwo\js\track.html">Tracking</a>
            </li
        
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4"> 
            </div>
            <div class="col-md-4" style="padding: 100px">
                <form action="owner.php" class="text-center" method="post">
                    <div class="form-group">
                        <table>
                            <tr class="marginMe">
                                <td class="centerMe">
                                    <div>
                                        <label for="companyName">Company Name</label> <br>
                                        <input name="variableCompanyName" class="marginMe" type="text" id="companyName" placeholder="Company Name">
                                    </div>
                                </td>
                                <td class="centerMe">
                                    <div>
                                        <label for="phoneNumber">Company Phone Number</label> <br>
                                        <input name="variablecompanyphonenumber" class="marginMe" type="tel" id="phoneNumber" placeholder="Phone Number">
                                    </div>
                                </td>
                            </tr>
                            <tr class="marginMe">
                                <td class="centerMe">
                                    <div>
                                        <label for="registrationNumber">Company Registration Number</label> <br>
                                        <input name="variablecompanyregistrationnumber " class="marginMe" type="text" id="registrationNumber" placeholder="REgistration Number">
                                    </div>
                                </td>
                            </tr>
                            <tr class="marginMe">
                                <td class="centerMe">
                                    <div>
                                        <label for="address">Company Address</label> <br>
                                        <input name="variablecompanyaddress" class="marginMe" type="text" id="address" placeholder="Address">
                                    </div>
                                </d>
                                <td class="centerMe">
                                    <div>
                                        <label for="email">Company Email</label> <br>
                                        <input name="variablecompanyemail" class="marginMe" type="email" id="email" placeholder="Email">
                                    </div>
                                </td>
                            </tr>
                            <tr class="marginMe">
                                <td class="centerMe">
                                    <div>
                                        <label for="code">Company Post Code</label> <br>
                                        <input name="variablecompanypostcode" class="marginMe" type="text" id="code" placeholder="Post Code">
                                    </div>
                                </td>
                                <td class="centerMe">
                                    <div>
                                        <label for="password">Create Password</label> <br>
                                        <input name="variablepassword" class="marginMe" type="password" id="password" placeholder="Create Password">
                                    </div>
                                </td>
                            </tr>
                            <tr class="marginMe">
                                <td class="centerMe">
                                    <div>
                                        <label for="land">Media Owner</label>
                                        <div class="marginMe">
                                            Yes<input type="radio" name="owner" id="owner">
                                            No<input type="radio" name="owner">
                                        </div>
                                    </div>
                                </td>
                                <td class="centerMe">
                                    <div>
                                        <label for="password">Confirm Password</label> <br>
                                        <input class="marginMe" type="password" id="password" placeholder="Confirm Password">
                                    </div>
                                </td>
                            </tr>
                            <tr class="marginMe">
                                <td class="centerMe">
                                    <div>
                                        <label for="Tenant">Media Buyer</label>
                                        <div class="marginMe">
                                            Yes<input type="radio" name="buyer" id="buyer">
                                            No<input type="radio" name="buyer">
                                        </div>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="centerMe" colspan="2">
                                    <button type="submit">
                                        Submit
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
            <div class="col-md-4" style="padding: 100px"></div>
        </div>
    </div>
</body>
</html>