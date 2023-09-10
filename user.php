<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Conecction succefull";
}else{
    echo "  no conection";
}

mysqli_select_db($con,'websiteuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userdata(username,email,mobile,comment)
values('$user' , '$email','$mobile','$comment')";



mysqli_query($con,$query);

header('location:index.php');




?>