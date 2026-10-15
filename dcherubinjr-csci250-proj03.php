<html>
<head>
<title>Project 3, Holidays</title>
</head>

<body>

<?php
echo 'Today is: ' . date('F j, g:i a');

$today = @$_GET['date'] ?? date('m-d');

if ($today == '01-01') {
    echo "<h2>Happy New Year!</h2>";
    echo "<img src='newyear.jpg' alt='New Year' width='300'>";
} elseif ($today == '02-14') {
    echo "<h2>Happy Valentine's Day!</h2>";
    echo "<img src='valentines.jpg' alt='Valentine' width='300'>";
} elseif ($today == '07-04') {
    echo "<h2>Happy 4th of July!</h2>";
    echo "<img src='july4.jpg' alt='4th of July' width='300'>";
} elseif ($today == '10-31') {
    echo "<h2>Happy Halloween!</h2>";
    echo "<img src='halloween.jpg' alt='Halloween' width='300'>";
} elseif ($today == '12-25') {
    echo "<h2>Merry Christmas!</h2>";
    echo "<img src='christmas.jpg' alt='Christmas' width='300'>";
} else {
    echo "<h2>Have a Great Day!</h2>";
    echo "<img src='default.jpg' alt='Regular Day' width='300'>";
}
?>

<br><br>
<p>Links to each day:</p>
<a href="dcherubinjr-csci250-proj03.php?date=01-01">New Year</a><br>
<a href="dcherubinjr-csci250-proj03.php?date=02-14">Valentines</a><br>
<a href="dcherubinjr-csci250-proj03.php?date=07-04">4th of July</a><br>
<a href="dcherubinjr-csci250-proj03.php?date=10-31">Halloween</a><br>
<a href="dcherubinjr-csci250-proj03.php?date=12-25">Christmas</a><br>
<a href="dcherubinjr-csci250-proj03.php">Reset (Today)</a><br>

</body>
</html>
