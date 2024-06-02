<?php 
ob_start(); 
require 'config.php';
$fack = $_POST['Add'];
$view = $_POST['view'];
$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$num = $_POST['num'];


$query = mysqli_query($con, "INSERT INTO `poll` (`id`, `name`, `email`, `EnrollNO`, `feedback`, `suggestions`, `faculty`)  VALUES ('','$name','$email','$num','$view','$comments','$fack')");

if($query){
    echo "Successs";
}
else{
    echo "faild";
}
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
?>





