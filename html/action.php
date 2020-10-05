<?php 

if (isset($_POST['email'])) {
    $email =$_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = file_get_contents(__DIR__.'/subscribers.php');
        $file = explode(', ', $file);
        if (in_array($email, $file)) {
            echo 'You have already subscribed...';
        } else {
            $fopen = fopen(__DIR__.'/subscribers.php', 'a');
            fwrite($fopen, $email.', ');
            fclose($fopen);
            $message = "Thank You for subscribing to the INKO2 newsletter. You will be kept up to date with new deals and offers\nWelcome to the INKO2 family.\n\n\nINK2 Inc.\nCoding Classes and Web Development\nSTOP. GO INKO!";
            mail($email, 'Thank You For Subscribing', $message, 'From: inko2coding@gmail.com');
            echo 'Thank you for subscribing';
        }
    } else {
        echo 'Please enter a valid email...';
    }
}

?>
