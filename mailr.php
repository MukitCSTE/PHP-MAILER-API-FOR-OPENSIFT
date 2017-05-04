<?php 

//echo "string";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){


$emaill = $_SERVER["REQUEST_URI"];
//echo $emaill;
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];

//$emailly= substr($emaill, 11);
//echo $emailly;
//$email= $emailly;
//$email = str_replace("/","", $email);


}

echo $pass;


echo $email;


require 'PHP/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mukitkhan07@gmail.com';                 // SMTP username
$mail->Password = '1010879913800';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port =  465; 
$m = "nstucstean@gmail.com";                                  // TCP port to connect to

$mail->setFrom('mukitkhan07@gmail.com', 'NSTU ONB');
$mail->addAddress($email, 'rothinroy3');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('mukitkhan07@gmail.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$password = rand(1234556,162222222252);
$mail->Subject = 'NEW LOGIN PASSWORD FOR NSTU ONB ';
$mail->Body    = "Hi,<p></br>It seems you may have forgotten your login password at NSTU ONB.</br></p>
<p></br> No need to worry any more.</br></p>
<p>Your new password is : <b>{$password}</b>.</p>Use this password to login and then <b>you can change the password later</b> by your own way , so that you can able to remember it easily for further login . If you face any problem just reply to us about the problem that you have faced. Our engineers are always ready to help you.<p></br>Thank you so much for using NSTU ONB</br></p><p><br><b>A product of MAGPIE Intelligence.</b></br></p>" ;

$mail->AltBody = '';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}









?>



