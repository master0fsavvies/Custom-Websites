<?php
$visitor_name = stripcslashes($_POST['name']);
$visitor_email = stripcslashes($_POST['email']);
$visitor_phone = stripcslashes($_POST['phone']);
$visitor_notes = stripcslashes($_POST['notes']);

$email_header = "From: projects@one-small-planet.us\n"
 . "Reply-To: " . $visitor_email;
$email_body = "Contact Info\n\n"
 . "Name: $visitor_name\n"
 . "Email: $visitor_email\n"
 . "Phone: $visitor_phone\n"
 . "Notes: $visitor_notes\n";

if (mail("projects@one-small-planet.us", "PHP Contact Form message", $email_body, $email_header)) { ?>
    <html>
        <body style="background-image: url('contact-background.png')">
            <div style="width: 600px; margin: 60px auto; text-align: center; color: white;
            background-color: #004c4c; padding: 30px; border-radius: 10px;">
                <p style="font-size: 20px;">Contact Information Sent</p>
                <p>Thank you for contacting us!</p>
            </div>
        </body>
    </html>
<?php
} else {
    echo '<h1>There was a problem</h1>';
}
exit;
?>