<html>
<body>



<?php
$to = "antselley@gmail.com";
$subject = "New Newsletter Subscriber";
$txt = "Yay, a subscriber!" . $_GET["name"] . $_GET["EMAIL"];
$headers = "From: " . $_GET["EMAIL"] . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>


Thank you for subscribing!
We look forward to having you with us on this exciting journey.
As a part of our community - please do help us spread the word.
We're particularly excited about teachers/students/parents who might be interested in helping to drive the movement towards real world learning.
<a href="https://schoolsgrandchallenge.000webhostapp.com"> Return to homepage. </a>


</body>
</html>
