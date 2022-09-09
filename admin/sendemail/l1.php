<?php



$exmail = explode(",",$escalate_email);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '360liveofficial@gmail.com';                     // SMTP username
    $mail->Password   = 'o@12345678';                               // SMTP password
    //$mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8'; 
 
    $mail->Encoding = 'base64';
    $mail->SMTPDebug  = 2;
    //Recipients
    $mail->setFrom('360liveofficial@gmail.com','Test Team');
    

    for($i=0;$i<count($exmail);$i++)
    {
        $mail->addAddress($exmail[$i], 'DULSCO');
    }

    

    $status=strtoupper($status);
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'DULSCO TICKET AND USER DETAILS - STATUS : '.$status.' - TICKET ID : '.$ticketId.' ';
    $mail->Body    = '<table border="0" cellspacing="0" cellpadding="0" align="center" id="m_-7884055993486135906email_table" style="border-collapse:collapse"><tbody><tr><td id="m_-7884055993486135906email_content" style="background:#ffffff"><table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse"><tbody><tr><td height="20" style="line-height:20px" colspan="3">&nbsp;</td></tr><tr><td height="1" colspan="3" style="line-height:1px"></td></tr><tr><td><table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:solid 1px white;margin:0 auto 5px auto;padding:3px 0;text-align:center;width:430px"><tbody><tr><td width="15px" style="width:15px"></td><td style="line-height:0px;width:400px;padding:0 0 15px 0"><table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse"><tbody><tr><td><img width="250" style="border:0;margin-left: 75px;" src="https://azhd.ae/wp-content/uploads/2018/02/AZHD-LOGO-240x96.png"></td></tr></tbody></table></td><td width="15px" style="width:15px"></td></tr><tr><td width="15px" style="width:15px"></td><td style="border-top:solid 1px #c8c8c8"></td><td width="15px" style="width:15px"></td></tr></tbody></table></td></tr><tr><td><table border="0" width="430" cellspacing="0" cellpadding="0" style="border-collapse:collapse;margin:0 auto 0 auto"><tbody><tr><td><table border="0" width="430px" cellspacing="0" cellpadding="0" style="border-collapse:collapse;margin:0 auto 0 auto;width:430px"><tbody><tr><td width="15" style="display:block;width:15px">&nbsp;&nbsp;&nbsp;</td></tr><tr><td><table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse"><tbody><tr><td><table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse"><tbody><tr><td width="20" style="display:block;width:20px">&nbsp;&nbsp;&nbsp;</td><td><table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse"><tbody><tr><td><p style="padding:0;margin:10px 0 10px 0;font-size:16px">Dear Team, </p><p style="padding:0;margin:10px 0 10px 0;font-size:16px">Please assist the Customer as soon as possible. Customer Details are as below</p><br><p ><b>Ticket Details</b></p><p>Ticket id :'.$ticketId.'</p><p>Comment :'.$comments.'</p><b>Customer Details</b><p> Name : '.$customername.'</p><p> Gender : '.$gender.'</p><p> Date of Birth : '.$dob.'</p><p>Age : '.$age.'</p><p>Phone Number : '.$mobile_number.' </p><p>Customer Email: '.$email.'</p><p>Process Name  :'.$processname .' </p><p>Created Date : '.$createdtin.'</p><p>Please use the below link to add further comment</p><p><a href=192.168.22.54:8080/ah2/ts/ticket_view/'.$id.$slash.$ticketId.'>192.168.22.54:8080/ah2/ts/ticket_view/'.$ticketId.'</a></p><p style="padding:0;margin:10px 0 10px 0;color:#565a5c;font-size:16px"></p><p style="padding:0;margin:10px 0 10px 0;color:#265a73;font-size:16px;margin-top: 60px;">Regards</p><p style="padding:0;margin:10px 0 10px 0;color:#265a73;font-size:16px">DULSCO Team</p></td></tr><tr><td height="20" style="line-height:20px" colspan="1">&nbsp;</td></tr><tr><td><a href="" style="color:#3b5998;text-decoration:none;display:block;width:370px" target="_blank"><table border="0" width="390" cellspacing="0" cellpadding="0" style="border-collapse:collapse"></table></a></td></tr></tbody></table></td><td width="20" style="display:block;width:20px">&nbsp;&nbsp;&nbsp;</td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height="10" style="line-height:10px" colspan="1">&nbsp;</td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td>';
    $mail->AltBody = 'TICKET AND USER DETAILS HTML View is Not loaded Please Talk to the Call center admin';

    $mail->send();
   // echo 'Message has been sent';
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

return;

?>