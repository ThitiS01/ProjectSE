<?php
include('conn.php');

$roomname = $_POST['roomname'];
$location = $_POST['location'];
$capacity = $_POST['capacity'];
$projector = $_POST['projector'];
$microphone = $_POST['microphone'];
$others = $_POST['others'];


mysqli_query($conn, "insert into room (roomname, location, capacity, projector, microphone, others ) 
	values ('$roomname', '$location', '$capacity', '$projector', '$microphone', '$others')");

header('location:addroom.php');
