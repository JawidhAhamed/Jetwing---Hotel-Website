<?php

echo '<span style="font-size: 40px; font-weight: bold;">Your Booking Successful....!</span>';
echo "<br>";
echo "<br>";
echo "<br>";


$Name=$_POST["name"];
$Email=$_POST["email"];
$Phone=$_POST["phone"];
$Adults=$_POST["adults"];
$Children=$_POST["children"];
$checkin=$_POST["checkindate"];
$checkout=$_POST["checkoutdate"];

echo $Name."<br>".$Email."<br>".$Phone."<br>".$Adults."<br>".$Children."<br>".$checkin."<br>".$checkout."<br>";

$servername="localhost";
$username="root";
$password="";
$dbname="hotelreservation";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("not_connected".mysqli_connect_error());
}

$sql="INSERT INTO bookings(Name,Email_Address,Phone_Number,Number_of_Adults,Number_of_Children,Check_in_Date,Check_out_Date)VALUES('$Name','$Email','$Phone','$Adults','$Children','$checkin','$checkout')";

if(mysqli_query($conn,$sql)){
   echo "Data added successfully";
}
else{
   echo "error";
}

mysqli_close($conn);

?>