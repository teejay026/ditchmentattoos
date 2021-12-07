require 'class.phpmailer.php';
 
$outlook_mail = new PHPMailer;
 
$outlook_mail->IsSMTP();
// Send email using Outlook SMTP server
$outlook_mail->Host = 'smtp-mail.outlook.com';
// port for Send email
$outlook_mail->Port = 587;
$outlook_mail->SMTPSecure = 'tls';
$outlook_mail->SMTPDebug = 1;
$outlook_mail->SMTPAuth = true;
$outlook_mail->Username = 'donotreplytest@Outlook.com.au';
$outlook_mail->Password = '!?Freedom112!?';
 
$outlook_mail->From = 'donotreplytest@Outlook.com.au';
$outlook_mail->FromName = 'Do Not Reply-Test';// from name
$outlook_mail->AddAddress('tiffanypeters20@hotmail.com', 'To Name');  // Add a recipient  to name
$outlook_mail->AddAddress('Myself');  // Name is optional
 
$outlook_mail->IsHTML(true); // Set email format to HTML
 
$outlook_mail->Subject = 'Here is the subject for onlinecode';
$outlook_mail->Body    = 'Send email using Outlook SMTP server <br>This is the HTML message body <strong>in bold!</strong> <a href="http://onlinecode/" target="_blank">onlincode.org</a>';
$outlook_mail->AltBody = 'This is the body in plain text for non-HTML mail clients at http://onlinecode/';
 
if(!$outlook_mail->Send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $outlook_mail->ErrorInfo;
exit;
}
else
{
echo 'Message of Send email using Outlook SMTP server has been sent';
}
