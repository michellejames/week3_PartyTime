<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
	    
	     <!-- ABOUT this page -->
	    <title></title>
	    <meta name="description" content="This page is a RSVP page for the ultimate Summer Party">
	    <meta name="keywords" content="party, friends, rsvp"  />
	    <meta name="author" content="Michelle James">
	    
	    <!--  VIEWPORT optimized specific to content -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	    	    
	    <!-- CSS -->
		<style type="text/css" media="screen">
			
		</style>
	</head>
	<body>

	<form action="handle_rsvp.php" method="post">
		<label>First Name: </label>
		<input type="text" name="firstname"/><br>
		<label>Last Name: </label>
		<input type="text" name="lastname"/><br>
		<label>Phone Number: </label>
		<input type="text" name="phone"/><br>
		<label>E-Mail Address: </label>
		<input type="text" name="email"/><br>
		<label>Preferred Drink: </label>
		<input type="text" name="drink"/><br>
		<label>Comments: </label><br>
		<textarea name="comment"></textarea><br>
		<button type="submit">Submit</button>
	</form>
	
	<p>Download the current RSVP list here:</p>
	<a href="guests.csv">RSVP List</a>

		<script></script>
	</body>
</html>
