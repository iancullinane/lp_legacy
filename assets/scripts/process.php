<?php

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data
$config 		= include('../config/config.php');

require_once 'Mailer.php';
require_once '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

	if (empty($_POST['fname']))
		$errors['fname'] = 'Name is required.';

	if (empty($_POST['lname']))
		$errors['lname'] = 'Name is required.';

	if (empty($_POST['email']))
		$errors['email'] = 'Email is required.';

// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
		$data['message'] = "You are missing fields";

	} else {

		// if there are no errors process our form, then return a message

		$data['fname'] = $_POST['fname'];
		$data['lname'] = $_POST['lname'];
		$data['email'] = $_POST['email'];
		$data['phone'] = $_POST['phone'];
		$data['sqft'] = $_POST['sqft'];
		$data['services'] = $_POST['services'];
		$data['time'] = $_POST['time'];
		$data['comments'] = $_POST['comments'];

		//mail the information using PHPMailer
		//mailMaker() create the html using boilerplate		
        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
        $mail->Host = $config['host'];
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = $config['username'];
        $mail->Password = $config['userpw'];
        $mail->SetFrom("info@lpcommercialcleaning.com");
        $mail->Subject = "Contact request from " . $data['fname'] . ' ' . $data['lname'];
        $mail->Body = mailMaker($data);
        $mail->AddAddress("info@lpcommercialcleaning.com");
        //$mail->AddAddress("iancullinane@gmail.com");

        try{
        	$mail->Send();
        } catch (Exception $e){ echo $e->getMessage(); die(); }
        
        // show a message of success and provide a true success variable
		$data['success'] = true;
		$data['message'] = 'Success!';
	}

echo json_encode($data);





// return all our data to an AJAX call

