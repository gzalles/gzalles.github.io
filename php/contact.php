<?php $name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$comment = $_COMMENT['Comment'];
$formcontent="From: $name \n Message: $comment";
$recipient = "gzallesb@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
