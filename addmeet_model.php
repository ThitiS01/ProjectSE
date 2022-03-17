<?php
	include('conn.php');
	
	$meetid=$_POST['meetid'];
	$title=$_POST['title'];
	$head=$_POST['head'];
	$numattend=$_POST['numattend'];
	$listname=$_POST['listname'];
	$roomid=$_POST['roomid'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$addequipment=$_POST['addequipment'];
	$remark=$_POST['remark'];
	$meetfile=$_POST['meetfile'];
	
	$file=$_FILES['meetfile'];
	$filename=$_FILES["meetfile"]["name"];
	$filTmpename= $_FILES["meetfile"]["tmp_name"];
	$fileExt= explode(".",$filename);
	$fileAcExt= strtolower(end($fileExt));
	$newFilename= time() . "." . $fileAcExt;
	$fileDes= 'upload/'.$newFilename;

	move_uploaded_file($filTmpename,$fileDes);
	$meetfilelocation=$fileDes;
	
	mysqli_query($conn,"insert into meeting (meetid, title, head, numattend, listname, roomid, start, end, addequipment, remark, meetfile) 
	values ('$meetid', '$title', '$head', '$numattend', '$listname', '$roomid', '$start', '$end', '$addequipment', '$remark', '$meetfilelocation')");
	header('Location: addmeet.php');
