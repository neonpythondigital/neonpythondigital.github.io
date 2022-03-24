<?php
 
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $visitor_country = "";
    $visitor_subject = "";
    
    $email_body = "<div>";
     
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                        </div>";
    }

    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }
     
     if(isset($_POST['visitor_country'])) {
        $visitor_name = filter_var($_POST['visitor_country'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor country:</b></label>&nbsp;<span>".$visitor_country."</span>
                        </div>";
       
                          
    }
     
    if(isset($_POST['visitor_subject'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_subject']);
        $email_body .= "<div>
                           <label><b>Visitor subject:</b></label>
                           <div>".$visitor_subject."</div>
                        </div>";
    }

    if($required_department == "web design") {
        $recipient = "neonpythondigital@yahoo.com";
    }
    else if($required_department == "digital marketing") {
        $recipient = "neonpythondigital@yahoo.com";
    }
    else if($required_department == "technical support") {
        $recipient = "neonpythondigital@yahoo.com";
    }
    else {
        $recipient = "neonpythondigital@yahoo.com";
    }
     
    $email_body .= "</div>";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}
?>

. " -" . "<a href='contact.html' target='_blank'>Click here to visit Contact page</a>"; 

