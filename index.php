<?php
$con= mysqli_connect('localhost','root');

if($con){
    echo "HELLO BUDDY";
}
else
{
    echo "INVALID DATA";
}
mysqli_select_db($con, 'ashish');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$query = "insert into data (name,email,password)
values ('$name','$email','$password')";
mysqli_query($con, $query);
echo "Welcome";
?>