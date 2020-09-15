<?php
	

$fname=filter_input(INPUT_POST,'fname');
$lname=filter_input(INPUT_POST,'lname');
$email=filter_input(INPUT_POST,'email');
$state=filter_input(INPUT_POST,'state');
$zip=filter_input(INPUT_POST,'zip');
$feedback=filter_input(INPUT_POST,'feedback');

$host ="localhost";
$username ="root";
$pass ="";
$dbname ="csi";

$conn = new mysqli ($host,$username,$pass,$dbname);

if(mysqli_connect_error()){
	die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
	echo "not connected";
}
else{
	$sql="insert into form(fname,lname,email,state,zip,feedback) values ('$fname','$lname','$email','$state',$zip,'$feedback');";
	
	if($conn-> query($sql)){
		echo "new records added!";
	}
	else{
		echo "error: ".$sql."<br>".$conn->error;
	}
}








?>