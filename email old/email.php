<?php
$subject = "Hey";
$message = "Hello ";

$emailaddress = "ruwinsachintha@gmail.com";

$mail=mail($emailaddress, $subject, $message, "From:rdissa@ruwinzar.ml");

if ($mail){
echo"Message has been sent";
}
else{
echo"Message not sent this time";
}
?>