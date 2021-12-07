require 'class.phpmailer.php';
 
$mail = new PHPMailer(true);
 
$mail->isSMTP();
    // Send email using Outlook SMTP server
$mail->Host = 'smtp-mail.outlook.com';
    // port for Send email
$mail->SMTPAuth = true;
$mail->Username = 'donotreplytest@outlook.com.au';
$mail->Password = '!?Freedom112!?';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';

 
$mail->setFrom('donotreplytest@outlook.com.au', From Name);
$mail->addAddress('tiffanypeters20@hotmail.com', 'To Name');  // Add a recipient  to name
 
$mail->isHTML(true); // Set email format to HTML
 
$mail->Subject = 'Here is the subject for onlinecode';
$mail->Body    = 'Send email using Outlook SMTP server <br>This is the HTML message body <strong>in bold!</strong> <a href="http://onlinecode/" target="_blank">onlincode.org</a>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients at http://onlinecode/';
 
if(!$mail->Send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;
exit;
}
else
{
echo 'Message of Send email using Outlook SMTP server has been sent';
}
