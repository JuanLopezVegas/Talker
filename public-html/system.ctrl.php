<?php

require ("db-conn.inc.php");
require ("PHPMailer/PHPMailer.php");
require ("PHPMailer/Exception.php");
require ("PHPMailer/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Place directly inside Bootstrap container to keep the right structure of Bootstrap document
function phpShowSystemFeedback($feedback_id) {
	switch ($feedback_id) {

		// case "201":
		// $feedback_type="danger";
		// $feedback_text="Can't you remind how to write your first name? I must contain between 3 to 15 characters and only letters";
		// break;
		//
		// case "202":
		// $feedback_type="danger";
		// $feedback_text="Can't you remind how to write your last name? I must contain between 3 to 15 characters and only letters";
		// break;
		//
		// case "203":
		// $feedback_type="danger";
		// $feedback_text="Can't you remind how to write your nickname? I must contain between 3 to 15 characters and only letters";
		// break;
		//
		// case "204":
		// $feedback_type="is-invalid";
		// $feedback_text="Password must be between 8 and 16 characters long, with at least one uppercase and lowercase character, one number and one special character (@, *, $ or #).";
		// break;
		//
		// case "205":
		// $feedback_type="is-invalid";
		// $feedback_text="Current password is invalid.";
		// break;
		//
		// case "206":
		// $feedback_type="is-invalid";
		// $feedback_text="Password must be between 8 and 16 characters long, with at least one uppercase and lowercase character, one number and one special character (@, *, $ or #).";
		// break;
		//
		// case "207":
		// $feedback_type="is-invalid";
		// $feedback_text="New password must be different from the current password.";
		// break;


		case "211":
		$feedback_type="success";
		$feedback_text="data updated successfully :)";
		break;

		case "212":
		$feedback_type="success";
		$feedback_text="data removed successfully :)";
		break;

		case "213":
		$feedback_type="success";
		$feedback_text="password changed successfully :)";
		break;

		case "804":
		$feedback_type="danger";
		$feedback_text="This email is already fucked up you pussy :)";
		break;

		case "806":
		$feedback_type="danger";
		$feedback_text="Account already activated my fellow brother :)";
		break;

		case "807":
		$feedback_type="danger";
		$feedback_text="verification link is coorrupted, someone is trying to get in :)";
		break;

		case "808":
		$feedback_type="danger";
		$feedback_text="Wrong email or password, come you IDIOT, learn to type :(";
		break;

		case "809":
		$feedback_type="danger";
		$feedback_text="Not so fast !! account not activated, check your email! :)   <a href='resend.ctrl.php'>Resend verification email</a>";
		break;

		case "805":
		$feedback_type="danger";
		$feedback_text="This email not registered come baby let's fuck!! :)";
		break;

		// case "806":
		// $feedback_type="danger";
		// $feedback_text="You are already a memeber of the brothehood";
		// break;
		//
		// case "807":
		// $feedback_type="danger";
		// $feedback_text="You can'd get in motherFucker, I caught you! :)";
		// break;


		case "811":
		$feedback_type="success";
		$feedback_text="You Have Been officially fucked by Society by Andy Frisella. Sign in to get some pussy!!!";
		break;

		case "812":
		$feedback_type="warning";
		$feedback_text="My brother Snow, check your sword (email) before taking the black & joiniing the brothehood and verify your commintment";
		break;

    }

	return [$feedback_type, $feedback_text];
}


function phpShowInputFeedback($feedback_id) {
	switch ($feedback_id) {

		case "201":
		$feedback_type="danger";
		$feedback_text="Can't you remind how to write your first name? I must contain between 3 to 15 characters and only letters";
		break;

		case "202":
		$feedback_type="danger";
		$feedback_text="Can't you remind how to write your last name? I must contain between 3 to 15 characters and only letters";
		break;

		case "203":
		$feedback_type="danger";
		$feedback_text="Can't you remind how to write your nickname? I must contain between 3 to 15 characters and only letters";
		break;

		case "204":
		$feedback_type="is-invalid";
		$feedback_text="Password must be between 8 and 16 characters long, with at least one uppercase and lowercase character, one number and one special character (@, *, $ or #).";
		break;

		case "205":
		$feedback_type="is-invalid";
		$feedback_text="Current password is invalid.";
		break;

		case "206":
		$feedback_type="is-invalid";
		$feedback_text="Password must be between 8 and 16 characters long, with at least one uppercase and lowercase character, one number and one special character (@, *, $ or #).";
		break;

		case "207":
		$feedback_type="is-invalid";
		$feedback_text="New password must be different from the current password.";
		break;

		case "801":
		$feedback_type="is-invalid";
		$feedback_text="This is not a valid email address";
		break;

		case "802":
		$feedback_type="is-invalid";
		$feedback_text="Password must be between 8 and 16 characters long, with at least one uppercase and lowercase character, one number and one special character (@, *, $ or #).";
		break;

		case "803":
		$feedback_type="is-invalid";
		$feedback_text="Passwords don't match";
		break;

		case "805":
		$feedback_type="is-invalid";
		$feedback_text="This email is not registered!";
		break;

		default:
		$feedback_type="";
		$feedback_text="Unspecified error or warning";
		break;
    }

	return [$feedback_type, $feedback_text];
}

// Create, update or delete a record in the database
function phpModifyDB($db_query, $db_data) {
  global $connection;

  $statement = $connection->prepare($db_query);
  $statement->execute($db_data);
}

// Get the information from the database
function phpFetchDB($db_query, $db_data) {
  global $connection;

  $statement = $connection->prepare($db_query);
  $statement->execute($db_data);

  //setting the fetch mode and returning the result
  return $statement->fetch(PDO::FETCH_ASSOC);
}

 function phpSendEmail($to, $subject, $content) {
  //Create a new PHPMailer instance
  $mail = new PHPMailer;
  //Tell PHPMailer to use SMTP
  $mail->isSMTP();
  //Enable SMTP debugging
  // 0 = off (for production use)
  // 1 = client messages
  // 2 = client and server messages
  $mail->SMTPDebug = 0;
  //Set the hostname of the mail server
  $mail->Host = 'smtp.gmail.com';
  //Set the SMTP port number
  $mail->Port = 587;
  //Set the encryption system to use tls
  $mail->SMTPSecure = 'tls';
  //Whether to use SMTP authentication
  $mail->SMTPAuth = true;
  //Username to use for SMTP authentication - use full email address for gmail
  $mail->Username = "zerocool.1600@gmail.com";
  //Password to use for SMTP authentication, your Gmail password comes here
  $mail->Password = SMTP_PSWD;
  //Set who the message is to be sent from
  $mail->setFrom('zerocool.1600@gmail.com', 'Zero Cool');
  //Set who the message is to be sent to
  $mail->addAddress($to);
  //Set email format to HTML and add content
  $mail->isHTML(true);
  $mail->Subject = $subject;
	$mail->Body    = $content;
  //send the message, check for errors
  if (!$mail->send()) {

      echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
      $_SESSION[msgid] = "812";
  }
}

function phpShowEmailInputValue($user_email) {
  if ($user_email != "") {
      $content="value='" . $user_email . "'";
  }else{
      $content="";
  }

  return $content;
}

function phpSendVerificationEmail($user_email, $hashed_user_password) {
	$verify_message = '

	Welcome to Talker! Thanks for signing up!<br><br>
	Your account has been created but before you can login you need to activate it with the link below.<br><br>

	Please click this link to activate your account:
	<a href="http://localhost/verify.php?email='.$user_email.'&hash='.$hashed_user_password.'">Verify your email</a>

	';

	phpSendEmail($user_email, 'Verify your account', $verify_message);
}


?>
