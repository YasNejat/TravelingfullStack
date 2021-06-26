
<?php 

$hostname = "173.212.235.205";
$username = "nejatcod_travel_website";//nejatcod_travel_website
$password = "Khashi67!";//
$dbname = "nejatcod_cr12_mount_everest_yasnejat"; //

// create connection
$connect = mysqli_connect($hostname, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
   die("Connection failed: " . $connect->connect_error);
}else {

   // echo "Successfully Connected";

}