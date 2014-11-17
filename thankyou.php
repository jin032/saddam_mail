
<?php
$name = $_POST["fullname"];
$email = $_POST["email"];
$comment = $_POST["comment"];

echo "$name";
echo "$email";
echo "$comment";
$email_comment = "
name = ".$name."
eamil = ".$email."
comment = ".$comment."

";

mail("bc080200889@vu.edu.pk", "new inquairy", $email_comment);




?>