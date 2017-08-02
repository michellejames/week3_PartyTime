<?php

function updateGuestlist ($first, $last, $phone, $email, $drink, $comment) {
	//specify my database file
	$fileName = "guests.csv";
	$fileMode = "a+";
	$date = date("Y-m-d H:i:s");
	
	//put the record together
//	$textToWrite = $first.";".$last.";".$phone.";".$email.";".$drink.";".$comment.";".$date."\n";
	
	$textToWrite = $first.";".$last.";".$phone.";".$email.";".$drink.";".$comment.";".$date."\n";
	//open and write to the file
	$handler = fopen($fileName, $fileMode);
	fwrite($handler, $textToWrite);
	fclose($handler);
}


$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$drink = $_POST['drink'];
$comment = $_POST['comment'];

//check for blanks
if (empty($firstName) || empty($lastName) || empty($phone) || empty($email) || empty($drink) || empty($comment)){
	die ("Please fill out all input fields.<br><a href='rsvp.php'>Go back</a>");	
}

//check test input
if (!is_string($firstName) || !is_string($lastName)) {
	die ("Please enter a valid name.<br><a href='rsvp.php'>Go back</a>");
}

//phone number check
   if(!preg_match('/^[0-9]{3}[0-9]{3}[0-9]{4}$/', $phone)) {
   	die ("Please enter a phone number formated like: 000-000-0000.<br><a href='rsvp.php'>Go back</a>");
   }
   
//check email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid e-mail address.<br><a href='rsvp.php'>Go back</a>");	
}

updateGuestlist($firstName, $lastName, $phone, $email, $drink, $comment);

echo "<br>"."Thanks for RSVPing! We are looking forward seeing you at the Party!";

$body = "Hey $firstName!

Looking forward to see you at The Summer Party!

Best,
Shelly";
mail("michelle.james@engelvoelkers.com", "See you at The Summer Party", $body);


?>

<br><br>
<a href="rsvp.php">Go back </a> to the form