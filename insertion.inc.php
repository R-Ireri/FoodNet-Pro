<?php

if(isset($_POST["reg"])){

	$fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $question = $_POST['rq'];
    $answer = $_POST['ra'];
    $password = $_POST['password'];
    $passconfirm = $_POST['cpassword'];

require_once 'dbconnection.inc.php';

if (empty($password)){
	echo "Kindly input a password.";
}

else if ($password == $passconfirm) {

	$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `users`(`Fullname`, `Email_Address`, `Phone_Number`, `Recovery_Question`, `Recovery_Answer`, `Password`) VALUES ('$fname','$email','$phone','$question','$answer','$hashedpassword')";

	mysqli_query($conn, $sql);
	 // var_dump($sql);
	 // die();
	header("Location: login.html?signup=success");

}else{
	echo "Passwords do not match.";
}

}


if (isset($_POST['adda'])) {
  require 'dbconnection.inc.php';
  session_start();
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $question = $_POST['rq'];
  $answer = $_POST['ra'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if ($password == $cpassword) {

  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO `admin`(`Fullname`, `Email_Address`, `Position`, `Recovery_Question`, `Recovery_Answer`, `Password`) VALUES ('$fname','$email','Area Administrator','$question','$answer','$hashedpassword')";

  mysqli_query($conn, $sql);
    //var_dump($sql);
   // die();
  header("Location: index.php");

}else{
  echo "Passwords do not match.";
}
        }


if (isset($_POST['addc'])) {
  require 'dbconnection.inc.php';
  session_start();
  $adr = $_POST['adr'];
  $com = $_POST['com'];
  $num = $_POST['num'];
  $date1 = $_POST['date1'];
  
$sql = "INSERT INTO `commodity`(`Area_Administrator`, `Commodity`, `Quantity`, `Date_Added`) VALUES ('$adr','$com','$num','$date1')";

  mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index1.php");

        }


?>