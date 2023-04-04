<?php
// Get the current counter value from the file
$count = file_get_contents("counter.txt");
// Increment the counter value
$count++;
// Write the new counter value back to the file
file_put_contents("counter.txt", $count);
?>