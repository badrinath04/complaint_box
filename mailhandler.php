<?php
	if(isset($_POST['submit'])){
		$hall=$_POST['hall'];
		$block=$_POST['block'];
		$name=$_POST['name'];
		$email='badrinathbonthu05@gmail.com';
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='badrinathbonthu04@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='New Complaint';
		$message="Hall No :".$hall."\n"."Block No :".$block."\n"."Room No :".$name."\n"."Phone :".$phone."\n"."Complaint :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			header("location: success.php");
		}
		else{
			header("location: oops.php");
		}
	}
?>


