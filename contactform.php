<?php 
    $mailFrom = $_POST['email'];
    $contents = $_POST['contents'];
    $mailTo = "tmester.yassine.n@puds5k7lca9zq.tk";
    $headers = "This email was sent from the Myles Website :)";
    $subject = "This is an automated email sent from my Email Contact Form.";
    
    
    mail($mailTo,$subject,$contents);
    header("Location: contact.html?mailsend");
?>