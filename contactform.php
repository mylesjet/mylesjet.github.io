<?php 
    if(filter_has_var(INPUT_POST, 'submit')) {
        $email = $_POST['email'];
        $message = $_POST['contents'];
        
        if(!empty($email) && !empty($message)) {
            $toEmail = 'michaelmcleanjs@gmail.com';
            $subject = 'Contact form from '.$email;
            $body = 'You have received a message through the contact form on your website: https://mylesjet.github.io Contents: ' . $message;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .="Content-Type:text/html;charset=UTF-8" . "
            \r\n";
            
            $headers .= "From: " .$email . "\r\n";
            
            if(mail($toEmail, $subject, $body, $headers)){
                //Email Sent
                header("Location: contact.html?mailsend");
            } else {
                //Email Failed
            }
            
        }
        } else {
            
    }
?>