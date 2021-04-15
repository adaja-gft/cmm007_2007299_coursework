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
              <a class="nav-link" href="C:\xampp\htdocs\advertTwo\About.html">About Us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Price.html">Pricing</a>
              </li>

            <li class="nav-item">
                <a class="nav-link" href="C:\xampp\htdocs\advertTwo\services.html">Services</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="reg.php">Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="C:\xampp\htdocs\advertTwo\js\track.html">Tracking</a>
            </li>
        
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div class ="row text-center" style="padding: 100px;background:rgba(255, 255, 255, 0.5);">
         <div class="col-md-4">
                <h3>
                    Register As Media Owner
                </h3>
                <form action="owner.php" class="text-center">
                            <div class="form-group">
                                 <button class="btn btn-info">
                                      Media Owner
                                 </button>
                            </div> 
                </form>                
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                     been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                     desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="col-md-4">
                <h3>
                    Rgister As Media Buyer 
                </h3>
                <form action="buyer.php" class="text-center">
                    <div class="form-group"> 
                        <button class="btn btn-info">
                          Media Buyer
                        </button>
                    </div>
                </form>    
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                     been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                     desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
      </div>
   </body>
</html>   