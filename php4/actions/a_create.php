<?php 

require_once 'a_create.php';

require_once '../dbconnect.php';

if($_POST) {
   $cname = $_POST['car_name'];
   $cmodel = $_POST['car_model'];
   $cpick = $_POST['car_pickup'];
   $cdrop = $_POST['car_dropoff'];
   $loc = $_POST['car_loction'];
   $city = $_POST['city'];

   $sql = "INSERT INTO booking (car_name, car_model, car_pickup, car_dropoff, car_loction, city) VALUES ('$cname', '$cmodel', '$cpick', '$cdrop', '$loc', '$city')";
   if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>";
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
       echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $conn->close();
}

?>