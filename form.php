<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<?php

// create a connection 

$severname = "localhost";
$username = "root";
$password = "";
$database = "db_form";


// connecting to a database

$conn = mysqli_connect("localhost", "root", "","db_form" );

// die if connection 

if(!$conn){
    die("failed to connect".mysqli_connect_error() );
}



// get the post records
if($_SERVER['REQUEST_METHOD'] == 'POST'){

$txtName = $_POST['fname'];
$txtlstName = $_POST['lname'];
$txtEmail = $_POST['email'];
$phone = $_POST['mobile'];
$altphone = $_POST['alter'];
$txtqual = $_POST['qualification'];
$txtaddress = $_POST['address'];
$txtstate = $_POST['state'];
$intpincode = $_POST['pin'];
$blobimg = $_POST['image'];

}

// database insert SQL code


$sql = " INSERT INTO `form` (`firstname`, `lastname`, `email`, `phone`, `altphone`, `qualification`, `address`, `state`, `pincode`,`image`) VALUES ('$txtName', '$txtlstName', '$txtEmail', '$phone', '$altphone', '$txtqual', '$txtaddress', '$txtstate', '$intpincode','$blobimg')";


// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo '<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah, you successfully registred the form. The records has been sucesfully inserted into the database. </p>
    <hr>
    <p class="mb-0">Thank You.</p>
  </div>';
}else{
    echo mysqli_error($conn);
}
?>

<a class="back-button" href="index.php"> return to the form page.</a>