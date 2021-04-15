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


if(isset($_POST['variableFirstName'])) {
    $firstName = (isset($_POST['variableFirstName']) ? trim($_POST['variableFirstName']) : '');
    $lastName = (isset($_POST['variableLastName']) ? trim($_POST['variableLastName']) : '');
    $address = (isset($_POST['variableAddress']) ? trim($_POST['variableAddress']) : '');
    $email = (isset($_POST['variableEmail']) ? trim($_POST['variableEmail']) : '');
    $password = (isset($_POST['variablePassword']) ? trim($_POST['variablePassword']) : '');
    $postcode = (isset($_POST['C']) ? trim($_POST['variablePostcode']) : '');
    $phonenumber = (isset($_POST['variablePhonenumber']) ? trim($_POST['variablePhonenumber']) : '');
    $sql = "INSERT INTO media_buyer (first_name, last_name, address, email, password, postcode, phone_number)
    VALUES ('$firstName', '$lastName',  '$address', '  $email', '$password', ' $postcode', '  $phonenumber' )";
    
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
                <a class="nav-link" href="C:\xampp\htdocs\advertTwo\buyer.php">Registration</a>
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
                <form action="buyer.php" class="text-center" method="post">
                    <div class="form-group">
                        <table>
                            <tr class="marginMe">
                                <td class="centerMe">
                                    <div>
                                        <label for="firstName">First Name</label> <br>
                                        <input name="variableFirstName" class="marginMe" type="text" id="firstName" placeholder="First Name">
                                    </div>
                                </td>
                                <td class="centerMe">
                                    <div>
                                        <label for="phoneNumber">Phone Number</label> <br>
                                        <input name="variablePhonenumber" class="marginMe" type="tel" id="phoneNumber" placeholder="Phone Number">
                                    </div>
                                </td>
                            </tr>
                            <tr class="marginMe">
                                <td class="centerMe">
                                    <div>
                                        <label for="lastName">Last Name</label> <br>
                                        <input name="variableLastName" class="marginMe" type="text" id="lastName" placeholder="First Name">
                                    </div>
                                </td>
                            </tr>
                            <tr class="marginMe">
                                <td class="centerMe">
                                    <div>
                                        <label for="address">Address</label> <br>
                                        <input name="variableAddress" class="marginMe" type="text" id="address" placeholder="Address">
                                    </div>
                                </td>
                                <td class="centerMe">
                                    <div>
                                        <label for="email">Email</label> <br>
                                        <input name="variableEmail" class="marginMe" type="email" id="email" placeholder="Email">
                                    </div>
                                </td>
                            </tr>
                            <tr class="marginMe">
                                <td class="centerMe">
                                    <div>
                                        <label for="code">Post Code</label> <br>
                                        <input name="variablePassword" class="marginMe" type="text" id="code" placeholder="Post Code">
                                    </div>
                                </td>
                                <td class="centerMe">
                                    <div>
                                        <label for="password">Create Password</label> <br>
                                        <input name="variablePassword" class="marginMe" type="password" id="password" placeholder="Create Password">
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