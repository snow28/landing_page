<?php


if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$msg = "Name : " . $name . "    Email : " . $email . "   Phone : " . $phone;

// send email
mail("hvoinuy28@gmail.com","Запрос на просмотр",$msg);
header('location: index.php');


}else{
    header('location: index.php');
    exit(0);
}









?>