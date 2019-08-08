<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	include("session.php");
	require_once 'conn.php';
	// session_start();
	
	if(ISSET($_POST['register'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		// $lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$middlename = $_POST['middlename'];

		
		mysqli_query($conn, "UPDATE lead_users_unicare SET firstname='$firstname',middlename='$middlename', email='$email' 
WHERE firstname='$id'") or die(mysqli_error());
		
    $link = "https://test-tele-marketing.herokuapp.com/marketing/verified.php?email=".$email."";
   // $cidA  = $mailor->addInlineImage('/imageA.jpg');
   // $cidB = $mailor->addInlineImage('/imageB.png');

// This is how we add attachments.
// $mailor->addAttachment('/some/path/contract.pdf');



		$message = "Hi $middlename! <br>"
        . "<br>Good day! I appreciate your time speaking with me over the phone and I'm glad that you're showing interest with the features and benefits of Aircast. It is a network of LED billboards located in <b>Universities, Convenience Stores, Clinics, Fitness Centers and Corporate Offices</b> covering <b>120,000 daily viewers</b>. You can place your ad for as low as P1 per 15 second spot with guaranteed 100 spots per day.   
            We would love to hear your campaign ideas and together lets collaborate on how we can deliver this to our viewers. See you in your office and we'll do a live demonstration of AIRCAST. 
   I already arranged your <b>free 10,000 spots</b> (equivalent to 30 seconds exposure per hour in ten Aircast Sites. If you can accept our meeting invite, our Accounts lead Niel will personally hand over you the free 10,000 spots voucher.<br><br>"
        . "Thank you and see you soon<br><br>"
        ."<img src=\'cid:logoimg\' />br>"
        ."<img src=\'cid:logoimg_1\' />br>"
        ."<img src=\'cid:logoimg_2\' />br>"           
        . "Our Aircast network has served campaigns from country's notable brands such as <b>McDonalds, Alaska, FWD, Lazada, Shakeys, GCash, MyHealth, Angkas, Globe and 20th Century Fox</b>. These innovative brands know the value of Live, Relevant and Targeted campaigns and were able to maximize Aircast's Programmatic features. For the actual brand campaigns, you may refer below.<br>"

        . "<br><a href='$link'>Click Here!</a>";
		
		//Load composer's autoloader
		require 'vendor/autoload.php';
 
		$mail = new PHPMailer(true);
	                            
   
		try {
			//Server settings
			$mail->isSMTP();                                     
			$mail->Host = 'smtp.gmail.com';                      
			$mail->SMTPAuth = true;                             
			$mail->Username = 'gmfacistol.palm@gmail.com';     
			$mail->Password = 'gameplan101213';             
			$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
			);                         
			$mail->SMTPSecure = 'ssl';                           
			$mail->Port = 465;                                   
	
			//Send Email
			$mail->setFrom('hello@palmsolutions.co', 'AIRCAST');
	
			//Recipients
			$mail->addAddress($email);              
			$mail->addReplyTo('gmfacistol.palm@gmail.com');
           // Add attachments
			//Content
			$mail->isHTML(true);   
			$mail->AddEmbeddedImage('cafe&convenience_store.png', 'logoimg', 'cafe&convenience_store.png');
			$mail->AddEmbeddedImage('mcdonalds.png', 'logoimg_1', 'mcdonalds.png');
			$mail->AddEmbeddedImage('store.png', 'logoimg_2', 'store.png');
			// $mail->addAttachment('AIRCAST-Company-Profile.pdf');                  	                             
			$mail->Subject = "Free Aircast spots for $firstname";
			$mail->Body    = $message;

	
			$mail->send();
	
			header("location:revised-home.php");
			
		} catch (Exception $e) {
			$_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
			$_SESSION['status'] = 'error';
		}

	}
	
?>