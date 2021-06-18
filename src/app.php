<?php
    if(isset($_POST['submit'])) {
        $name = trim($_POST['name']); 
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
    
        if(!empty($name) && !empty($email) && !empty($message)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "audarlarius@gmail.com";
                $subject = "New Message";
                $author = "From: " . $vardas . ", " . $email;
                $content = htmlspecialchars($message);
                // mail($to, $subject, $author, $content, $from);
                // echo "<script>alert('Thank you. We'll soon contact you.');</script>"
            }
        }
    
        include('db.php');
    }