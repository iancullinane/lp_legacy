
<?php

Class mailer {

	require_once '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

	private static $instance = NULL;

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }


	function sendMail($data){

		

		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "ian@iancullinane.com";
		$mail->Password = "raygun08";
		$mail->SetFrom("ian@iancullinane.com");
		$mail->Subject = "Test";
		$mail->Body = "hello";
		$mail->AddAddress("ian.cullinane@gmail.com");
 
 		if(!$mail->Send())
    		{
    			echo "Mailer Error: " . $mail->ErrorInfo;
    		}
    	else
    		{
    			echo "Message has been sent";
    		}

	


	}	








}









require_once '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

