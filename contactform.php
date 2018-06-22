<?php 

if (isset($_POST['submit'])) {
    $mailFrom = $_POST['email'];
    $contents = $_POST['contents'];
    $mailTo = "tmester.yassine.n@puds5k7lca9zq.tk";
    $headers = "This email was sent from the Myles Website :)";
    
    
    mail("tmester.yassine.n@puds5k7lca9zq.tk","Website Contact Form",$contents);
    header("Location: contact.html?mailsend");
}

?>