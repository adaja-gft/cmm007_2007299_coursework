<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Page</title>

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
    <div class="body_container">
        <div class="content">
            <div>
               <table class="track_table" border="2px">
                     <tr>
                          <th>No</th>
                          <th>Order No</th>
                          <th>Advert Title</th>
                          <th>Advert Type</th>
                          <th>Start Date</th>
                          <th>Amount</th>
                          <th>Placed at</th>
                          <th>Duration</th>
                          <th>Expiry Date</th>
                          <th>Comfirmation Status</th>
                          <th>Updates</th>
                     </tr>
               </table>
           </div>
        </div>
        <body>
<div class="body_container">
<?php
require('require/header_nav.php');
?>
<div class="content">
<div>
<table class="track_table" border="2px">
<tr>
<th>No</th>
<th>Order No</th>
<th>Advert Title</th>
<th>Advert Type</th>
<th>Start Date</th>
<th>Amount</th>
<th>Placed at</th>
<th>Duration</th>
<th>Expiry Date</th>
<th>Comfirmation Status</th>
<th>Updates</th>
</tr>
46
<?php
$no = 1;
while($row = mysqli_fetch_array($query)){
if($row['Advert_type'] == 'bill_board'){
$split = explode('_', $row['Advert_type']);
$name = ucfirst($split[0]).' '.ucfirst($split[1]);
}else{
$name = ucfirst($row['Advert_type']);
}
$what1 = "SELECT * FROM
".$_SESSION['Username']."_advert_placed WHERE Advert_id = ".$row['advert_id'];
$query1 = mysqli_query($connection, $what1) or
die(mysqli_error($connection));
$row1 = mysqli_fetch_array($query1);
$whatt = "SELECT * FROM location_price WHERE
Advert_id = ".$row['id'];
$query2 = mysqli_query($connection, $whatt) or
die(mysqli_error($connection));
$row2 = mysqli_num_rows($query2);
if($row2 > 0){
$whatt = "SELECT * FROM payment_teller_no
WHERE Advert_id = ".$row['id'].' AND User_id = '.$_SESSION['User_id'];
$query3 = mysqli_query($connection, $whatt)
or die(mysqli_error($connection));
$row3 = mysqli_num_rows($query3);
if($row3 > 0){
$link = '';
}else{
$link =
'track.php?pay='.$row['advert_id'];
$_SESSION['advert_id'] =
$row['advert_id'];
}
47
}else{
$link =
'track.php?get='.$row['Advert_title'].'&&id='.$row['id'];
}
$what1 = "SELECT * FROM
".$_SESSION['Username']."_advert_confirmation WHERE Advert_id = ".$row['advert_id'];
$query2 = mysqli_query($connection, $what1) or
die(mysqli_error($connection));
$row2 = mysqli_fetch_array($query2);
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo '<a
href="#">'.$row2['Order_no'].'</a>'; ?></td>
<td><?php echo '<a
href="'.$link.'"><b>'.$row['Advert_title'].'</b></a>'; ?></td>
<td><?php echo $name; ?></td>
<td><?php echo $row1['Start']; ?></td>
<td><?php echo
'&#8358;'.number_format($row1['Amount']); ?></td>
<td>
<?php
$what1 = "SELECT * FROM advert_price
WHERE advert_id = ".$row['advert_id'];
$query3 = mysqli_query($connection,
$what1) or die(mysqli_error($connection));
$row3 = mysqli_fetch_array($query3);
if($row3['Confirmation'] > 0){
echo '<table class="inner_no">';
$what =
'SELECT * FROM advert_location a JOIN lga b ON a.Location_id = b.id WHERE Advert_id =
'.$row['advert_id'];
$query3 =
mysqli_query($connection, $what) or die(mysqli_error($connection));
48
$add = 0;
echo
'<ul>';
while($row2 = mysqli_fetch_array($query3)){
echo '<tr><td><li>'.$row2['local_government_areas'].'</li></td>';
}
echo
'</ul>';
echo
'</table>';
}
?>
</td>
<td><?php echo $row1['Duration']; ?></td>
<td><?php echo $row1['End']; ?></td>
<td><?php
if($row1['Confirmation_status']){echo '<font
style="color:green;font-weight:bolder;">Placed</font>';}else{echo 'Pending';} ?></td>
<td><?php echo $row1['Updates']; ?></td>
</tr>
<?php
$no++;
}
?>
</table>
</div>
<?php
if(isset($_GET['pay']) && is_numeric($_GET['pay'])){
49
$whatt = "SELECT * FROM payment_teller_no WHERE
Advert_id = ".$_GET['pay'];
$query2 = mysqli_query($connection, $whatt) or
die(mysqli_error($connection));
$row2 = mysqli_num_rows($query2);
if($row > 0){
header('location:track.php');
die();
}
$what = 'SELECT * FROM location_price WHERE Advert_id =
'.$_GET['pay'];
$query = mysqli_query($connection, $what) or
die(mysqli_error($connection));
$row = mysqli_fetch_array($query);
?>
<div class="track_table_lga">
<h3>
<center>Comfirmation Box</center>
</h3>
Payment should be made into any of the stated Bank
accounts below and the <b>Teller NUMBER</b> sent through below form.... <br>
<b>*GTB Account Number : 0164957328</b><br>
<b>*WEMA Bank Account Number : 0230931824</b><br>
Location Price => <b> <?php echo
number_format($row['Location_price']); ?></b><br>
Advert Price => <b><?php echo
number_format($row['Advert_price']); ?></b><br>
Total Amount to be Paid => <b><?php echo
number_format($row['Total']); ?></b><br>
<table>
<form action="track.php" method="POST">
<tr>
<td><label for=""><b>Teller No
:</b></label></td>
50
<td><input type="text"
name="teller"></td>
</tr>
<tr>
<td><input type="submit" name="pay"
value="Send"></td>
</tr>
</form>
</table>
</div>
<?php
}
?>
<div>
<?php
if(isset($_GET['get']) && is_string($_GET['get']) &&
isset($_GET['id'])){
?>
<table>
<tr>
<td><label for=""><b>Location
:</b></label></td>
<td><select name="section"
id="opts" onchange="GotoPage()">
<option value="0">select</option>
<option value="track.php?state=Ondo State&&get=<?php
echo $_GET['get']; ?>&&id=<?php echo $_GET['id']; ?>">Ondo State</option>
</select></td>
</tr>
</table>
51
<?php
if(isset($_GET['state'])){
?>
<table class="track_table_lga">
<form action="track.php"
method="POST">
<tr>
<th colspan="3"><?php
echo $_GET['state']; ?></th>
</tr>
<tr>
<th>NO</th>
<th>LGA</th>
<th>Price</th>
</tr>
<?php
$_SESSION['advert_id'] =
$_GET['id'];
$i = 1;
$what1 = 'SELECT * FROM lga';
$query1 =
mysqli_query($connection, $what1) or die(mysqli_error($connection));
while($row2 =
mysqli_fetch_array($query1)){
echo '<tr>
<td>'.$i.'</td>
<td><input
type="checkbox" name="lga[]"
value="'.$row2['id'].'">'.$row2['local_government_areas'].'</td>
<td><input type="text"
name="price" value="&#8358;'.number_format($row2['Price']).'"
disabled="disabled"></td>
</tr>';
$i++;
}
?>
52
<tr>
<td colspan="3"><input
type="submit" name="continue" value="Continue"></td>
</tr>
</form>
</table>
<?php
}
}
if(isset($_POST['continue'])){
$what = "DELETE FROM advert_location WHERE
Advert_id = ".$_SESSION['advert_id'];
mysqli_query($connection, $what) or
die(mysqli_error($connection));
echo '<table border="2" class="continue_table">';
echo '<tr>
<th>Location</th>
<th>Price</th>
</tr>';
$price = 0;
foreach($_POST['lga'] AS $value){
$what = "SELECT * FROM lga WHERE id =
".$value;
$query = mysqli_query($connection, $what) or
die(mysqli_error($connection));
while($row4 = mysqli_fetch_array($query)){
$what4 = "INSERT INTO
advert_location(Advert_id, Location_id) VALUES('".$_SESSION['advert_id']."',
'".$row4['id']."')";
mysqli_query($connection, $what4) or
die(mysqli_error($connection));
$price += $row4['Price'];
53
echo '<tr>';
echo
'<td>'.$row4['local_government_areas'].'</td>';
echo '<td>'.$row4['Price'].'</td>';
echo '</tr>';
}
}
echo '</table>';
$what = "SELECT Amount FROM advert_price WHERE
advert_id = ".$_SESSION['advert_id'];
$query22 = mysqli_query($connection, $what) or
die(mysqli_error($connection));
$row5 = mysqli_fetch_assoc($query22);
$total = $price + $row5['Amount'];
$query22 = mysqli_query($connection, $what) or
die(mysqli_error($connection));
echo '<center><b>TOTAL ==> </b>
'.number_format($price).' + '.number_format($row5['Amount']).' =
'.number_format($total).'.</center>';
echo '<center><a
href="track.php?pay='.$_SESSION['advert_id'].'"><b>Click Here</b></a></center>';
$what = "INSERT INTO location_price(Advert_id,
Location_price, Advert_price, Total)
VALUES(".$_SESSION['advert_id'].", '$price',
'".$row5['Amount']."', '$total')";
mysqli_query($connection, $what) or
die(mysqli_error($connection));
}
?>
</div>
</div>
54
<?php
require('require/footer.php');
?>
</div>
</body>
   </body>
</html>