<?php

$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["email"];
$type=$_POST["type"];
$arrive=$_POST["arrive"];
$depart=$_POST["depart"];
$subject=$_POST["subject"];


echo $fname."<br>".$lname."<br>".$email."<br>".$type."<br>".$arrive."<br>".$depart."<br>".$subject."<br>";

$servername="localhost";
$username="root";
$password="";
$dbname="roombooking";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("not connected".mysqli_connect_error());
}

$sql="INSERT INTO bookings(First_Name,Last_Name,Email,Type_Of_Room,Arrive,Depart,Subject) VALUES ('$fname','$lname','$email','$type','$arrive','$depart','$subject')";

if(mysqli_query($conn,$sql)){
    echo "Data added successfully";
}
?>