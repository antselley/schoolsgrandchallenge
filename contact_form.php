<html>
<body>



<?php
$to = "antselley@gmail.com";
$subject = "Contact Form Submission" . $GET["subject"];
$txt = "From: " . $_GET["name"] . $_GET["message"];
$headers = "From: " . $_GET["email"] ;


mail($to,$subject,$txt,$headers);
?>


Thank you for reaching out.
We will be in touch shortly.
<a href="https://schoolsgrandchallenge.000webhostapp.com"> Return to homepage. </a>

</body>
</html>
