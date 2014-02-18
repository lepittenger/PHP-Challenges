<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel='stylesheet' href='style.css' type='text/css'>
	<?php require'logic.php'; ?>
</head>
<body>
	<header class="body">
	<h1>Get in Touch</h1>
	</header>

	<section class="body">
		<form method="post" action="logic.php">
			<label>First Name</label>
			<input name="first-name" placeholder="First Name">

			<label>Last Name</label>
			<input name="last-name" placeholder="Last Name">

			<label>Birth Year</label>
			<select name="birth-year">
				<option value="">Select...</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
			</select>

			<label>Number of Siblings</label>
			<input name="number-siblings" placeholder="Number of Siblings" type="number">

			<label>Bed Time</label>
			<input name="bed-time" type="time">

			<label>Wake Time</label>
			<input name="wake-time" type="time">

			<label>Approximate time spent on homework per day</label>
			<input name="homework-time" type="text">

			<label>Time spent watching TV/DVD etc. per day</label>
			<input name="tv-time" type="text">

			<label>Time spent using computer or games console per day</label>
			<input name="computer-time" type="text">

			<label>Time spent with family per day</label>
			<input name="family-time" type="text">

			<label>Time spent with friends per day</label>
			<input name="friends-time" type="text">

			<label>*What is 2+2? (Anti-spam)</label>
			<input name="human">

			<input id="submit" name="submit" type="submit" value="Submit">
		</form>
	</section>

	<footer class="body"></footer>

</body>
</html>