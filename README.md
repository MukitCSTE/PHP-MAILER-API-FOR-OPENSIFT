# PHP-MAILER-API-FOR-PaSS-or-Cloudased-Hosting(i.e OPENSHIFT)
It's just simple host to host mailing api system using PHP MAILER .  It will help you to send any email using OPENSHIFT or other CLOUD servers that is restricted to send email via popular SMTP Port 25,465,587

However , It is dificult to send mail via SMTP server in various PaSS or cloud based hosting platform . So to send email via
APP-->SERVER then USER END<---SERVER using SMTP server in various PaSS or cloud based hosting platform we can folow this machanism
>>>How To USE:
1) APP-->CLOUD HOST PROVIDING SERVER ( Cloud Based PaSS Plat Form i.e http://openshift.com/);
2) CLOUD HOST PROVIDING SERVER--> SMTP SUPPORTED SERVER
3) SMTP SUPPORTED SERVER --> USER END

1) To know more about PHP Mailer See the documentation, example to use  & Clone PHP MAILER From Here https://github.com/PHPMailer/PHPMailer.git 

2) Clone  PHP-MAILER-API-FOR-PaSS-or-Cloudased-Hosting(i.e OPENSHIFT)  & extract it 

3) Host it to a SMTP SUPPORTED SERVER  by setting up your own SMTP

4) Then Call mailr.php from a CLOUD HOST PROVIDING SERVER
  example: 
  
 <?php
   /*
   Forger Password Soluation;
   */
   $email='xxxxxxx@gmail.com'; // receiver email
  $e =$email;          
  $password =asnwsnwndb22;     // new password

  $homepage = file_get_contents('http://www.yourdomainname.com/mailr.php?email='.$e.'&password='.$password);

?>
