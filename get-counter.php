<?php
// Get the current counter value from the file
$count = file_get_contents("counter.txt");
// Return the counter value as plain text
header("Content-type: text/plain");
echo $count;
?>