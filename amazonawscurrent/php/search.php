<?php
include "functions.php";
$con=mysqli_connect("localhost", "root", "sigmaphidelta", "DaemonDashDashDash");

$origin=mysqli_real_escape_string($con, $_POST['search_origin']);
$destination=mysqli_real_escape_string($con, $_POST['search_destination']);
$startdate=mysqli_real_escape_string($con, $_POST['search_startdate']);
$enddate=mysqli_real_escape_string($con, $_POST['search_enddate']);
$starttime=mysqli_real_escape_string($con, $_POST['search_starttime']);
$endtime=mysqli_real_escape_string($con, $_POST['search_endtime']);

$array = array($origin, $destination, $startdate, $enddate, $starttime, $endtime);
$queryString = "select * from Rides where ";
for ( $i = 0; $i < 5; ++ $i ){
	if (!$array[i]){
	continue
	}else { 
		switch ( $i ) 
		{
		case 0: $queryString=$queryString+"Origin=$origin "; break;
		case 1: $queryString=$queryString+"Destination=$origin "; break;
		case 2: $queryString=$queryString+"origin=$origin "; break;
		case 3: $queryString=$queryString+"origin=$origin "; break;
		case 4: $queryString=$queryString+"Departure_Time=$origin "; break;
		case 5: $queryString=$queryString+"origin=$origin "; break;
		
	}
}	
}
#generate_rides($queryString);
header( "refresh:1; url=http://ec2-54-68-205-187.us-west-2.compute.amazonaws.com/website/templates?$queryString");





?>
