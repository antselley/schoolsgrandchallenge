<html>
<body>



<?php
$to = "antselley@gmail.com";
$subject = "Contact Form Submission" . $_GET["subject"];
$txt = "From: " . $_GET["name"] . "   " . $_GET["message"] . "   " . $_GET["email"];
$headers = "From: " . $_GET["email"] ;


mail($to,$subject,$txt,$headers);
?>


Thank you for reaching out.
We will be in touch shortly.
<a href="http://ambitiouscuriosity.org/"> Return to homepage. </a>

</body>
</html>
