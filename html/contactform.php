<?php

if (isset($_POST['submit'])) {
   $name = $_POST['first-name']." ".$_POST['last-name'];
   $subject = $_POST['subject'];
   $mailFrom = $_POST['email'];
   $message = $_POST['message']; 

   $mailTo = "inko2inc@yahoo.com";
   $txtResponse = "Thank You for contacting us.\n We will get back to you shortly\n\n\n\nINKO2 Inc.\nCoding Classes and Web Development\nSTOP. GO INKO!";
   $headers = "From: ".$mailFrom;
   $subjectResponse = "Thank You For Contacting Us";
   $txt = "You have recieved an email from ".$name.".\n\n".$message;
   $headerResponse = "From: inko2coding@gmail.com";

   mail($mailTo, $subject, $txt, $headers);
   mail($mailFrom, $subjectResponse, $txtResponse, $headerResponse);
   header("Location: contact.html?mailsent");
}

?>
