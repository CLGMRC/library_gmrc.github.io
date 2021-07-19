<?php

$con = mysqli_connect('localhost', 'root');

if($con){

	echo "connection successful";


}else{

	echo "No connection";
}
mysqli_select_db($con, 'youtubeuser data');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$land  = $_POST['land'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (User, Email, Mobile, Land, Comments)
values ('$user', '$email', '$mobile', '$land', '$comments')";

echo "$query";

mysqli_query($con,$query );

header('location:index.php');

?>