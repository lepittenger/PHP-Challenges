<?php

$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$birthyear = $_POST['birth-year'];
$numbersiblings = $_POST['number-siblings'];
$bedtime = $_POST['bed-time'];
$waketime = $_POST['wake-time'];
$homeworktime = $_POST['homework-time'];
$tvtime = $_POST['tv-time'];
$computertime = $_POST['computer-time'];
$familytime = $_POST['family-time'];
$friendstime = $_POST['friends-time'];
$from = 'From: TheSender';
$to = 'lepittenger@gmail.com';
$subject = '<?php echo $firstname $lastname ?>Survey results';

$human = $_POST['human'];

$body = "From: $firstname $lastname\n 
Birth Year: $birthyear\n
Number of Siblings: $numbersiblings\n
Bed Time: $bedtime\n
Wake Time: $waketime\n
Homework Time: $homeworktime\n
Tv Time: $tvtime\n
Computer Time: $computertime\n
Family Time: $familytime\n
Friends Time: $friendstime\n
";

if ($_POST['submit'] && $human == '4') {
	if (mail ($to, $subject, $body, $from)) {
		echo '<p>Great! Thanks '.$firstname.' for responding to our survey.</p>';
	}
	else {
		echo '<p>Something went wrong, please double check your inputs!</p>';
	}
} else if ($_POST['submit'] && $human !='4') {
	echo '<p>You answered the anti-spam question incorrectly</p>';
}

?>