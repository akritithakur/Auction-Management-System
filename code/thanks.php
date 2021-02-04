<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank you</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
     
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>



<?php
 
require 'connect.php';
$conn    = Connect();

$ID =isset($_POST['id'])?$conn->real_escape_string($_POST['id']):null;
$description   = isset($_POST['descrp'])?$conn->real_escape_string($_POST['descrp']):null;
$aquire =isset($_POST['aquireGroup'])? $conn->real_escape_string($_POST['aquireGroup']):null;

$query   = "INSERT into tb_antique (descrp,aquireGroup) VALUES('" . $description . "','" . $aquire . "')";

if($ID)
{
    $query="UPDATE tb_antique SET descrp='".$description."', aquireGroup='".$aquire."'' WHERE ID='$ID'";
}

if($conn->query($query)){
    
} else{
    echo $conn->error_log();
}

$target_dir = "uploads/";
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




$conn->close();

?>

<br>
<br>
<br>

<div class="jumbotron text-center" style="background: transparent;">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Your form has been submitted.</strong> </p>
  <br>
  <p>
    Having trouble? <a rel="nofollow" rel="noreferrer" href="">Contact us</a>
  </p>
  <p class="lead">
    <a rel="nofollow" rel="noreferrer"class="btn btn-primary btn-sm" href="../front.php" role="button">Continue to homepage</a>
  </p>
</div>




</body>
</html>