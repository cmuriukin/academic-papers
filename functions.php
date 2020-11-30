<?php 
if(session_id() == ''){
session_start();
}
require_once "classes/dbInsert.php";
require_once "classes/data.php";
require_once ('classes/validate.class.php');
require_once "upload_func.php";

/*function checkUser(){
	
	if(!isset($_SESSION['user']['user_login'])){
		header('Location: system/login.php');
		exit;
	}

}*/

function checkUser(){
    
	if(!isset($_SESSION['user']['user_login']) || !($_SESSION['user']['user_level'] == 1)) {
		header('Location: index.php');
		exit;
	}

}

function checkUser1(){
    
	if(!isset($_SESSION['user']['user_login']) || !($_SESSION['user']['user_level'] == 2)) {
		header('Location: index.php');
		exit;
	}

}




function update_user()
{



if (isset($_POST['username'])){
//require_once('recaptcha/recaptchalib.php');
 // $privatekey = "6LfnQOUSAAAAAJ5zOBWKSr-jtGVbEOJLYQhbi3QD";
 // $resp = recaptcha_check_answer ($privatekey,
                               // $_SERVER["REMOTE_ADDR"],
                              //  $_POST["recaptcha_challenge_field"],
                              //  $_POST["recaptcha_response_field"]);

 // if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
 //   die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
      //   "(reCAPTCHA said: " . $resp->error . ")");
	//	 $msg="The reCAPTCHA wasn't entered correctly. Go back and try it again.";
// header('location: order.php?msg='.$msg);
	//die();
  //} 
  
 // else 
  //{
    // Your code here to handle a successful verification
	
	$valid = new Validate;
$errorsExist = 0;
// clears the errors session flag
//if (isset($_SESSION['errors']))


unset($_SESSION['errors']['username']);
unset($_SESSION['errors']['desc']);
unset($_SESSION['errors']['firstname']);
unset($_SESSION['errors']['phone']);
unset($_SESSION['errors']['lastname']);
unset($_SESSION['errors']['email']);
unset($_SESSION['errors']['email1']);
unset($_SESSION['errors']['country']);
unset($_SESSION['errors']['password']);
unset($_SESSION['errors']['password1']);
/*// By default all fields are considered valid
$_SESSION['txtTopic'] = 'hidden';
$_SESSION['errors']['doc_type'] = 'hidden';
$_SESSION['errors']['no_of_pages'] = 'hidden';
$_SESSION['errors']['spacing'] = 'hidden';
$_SESSION['errors']['aclevel'] = 'hidden';
$_SESSION['errors']['urgency'] = 'hidden';
$_SESSION['errors']['subject_cat'] = 'hidden';
$_SESSION['errors']['style'] = 'hidden';
$_SESSION['errors']['sources'] = 'hidden';
$_SESSION['errors']['lang'] = 'hidden';
$_SESSION['errors']['country'] = 'hidden';
$_SESSION['errors']['phone'] = 'hidden';
*/
// Validate username

$conn2 = new Database();
    	$conn2->connectDb();
if (!$valid->validateUserName(mysql_real_escape_string(trim($_POST['username']))))
{
$_SESSION['errors']['username'] = 'Invalid Username';
$errorsExist = 1;
}

//validate firstname
if (!$valid->validateName(mysql_real_escape_string(trim($_POST['firstname']))))
{
$_SESSION['errors']['firstname'] = 'Invalid Field';
$errorExist = 1;
}
//validate lastname
if (!$valid->validateName(mysql_real_escape_string(trim($_POST['lastname']))))
{
$_SESSION['errors']['lastname'] = 'Invalid Field';
$errorExist = 1;
}

// Validate email
if (!$valid->validateEmail(mysql_real_escape_string(trim($_POST['email']))))
{
$_SESSION['errors']['email'] = 'Invalid Field';
$errorsExist = 1;
}

if (!$valid->validateEmail1(mysql_real_escape_string(trim($_POST['email'])),mysql_real_escape_string(trim($_POST['email1']))))
{
$_SESSION['errors']['email1'] = 'Invalid Field';
$errorsExist = 1;
}

if (!$valid->validateEmail1(mysql_real_escape_string(trim($_POST['password'])),mysql_real_escape_string(trim($_POST['password1']))))
{
$_SESSION['errors']['password1'] = 'Invalid Field';
$errorsExist = 1;
}

// Validate phone
if (!$valid->validatePhone(mysql_real_escape_string(trim($_POST['phone']))))
{
$_SESSION['phone'] = 'Invalid Field';
$errorsExist = 1;
}

if (!$valid->validateGender(mysql_real_escape_string(trim($_POST['country']))))
{
$_SESSION['errors']['country'] = 'Invalid Field';
$errorsExist = 1;
}

/*if (!$valid->validatePassword(mysql_real_escape_string(trim($_POST['password']))))
{
$_SESSION['errors']['password'] = 'Invalid Field';
$errorsExist = 1;
}*/

/*// Validate read terms
if (!isset($_POST['chkReadTerms']) ||!$valid->validateReadTerms($_POST['chkReadTerms'])) {
$_SESSION['errors']['chkReadTerms'] = 'error';
$_SESSION['values']['chkReadTerms'] = '';
$errorsExist = 1;
}*/
// If no errors are found, point to a successful validation
// page

$insert = new INSERT();

		
if ($errorsExist == 0)
{
$username = mysql_real_escape_string(trim($_POST['username']));
$password =  mysql_real_escape_string(trim(md5($_POST['password'])));
$firstname = mysql_real_escape_string(trim($_POST['firstname']));
$lastname = mysql_real_escape_string(trim($_POST['lastname']));
$userlevel = mysql_real_escape_string(trim($_POST['level']));
$mobile_phone = mysql_real_escape_string(trim($_POST['phone']));
$email = mysql_real_escape_string(trim($_POST['email']));
$status = mysql_real_escape_string(trim($_POST['status']));
$country = mysql_real_escape_string(trim($_POST['country']));
$confirm_id = md5(uniqid(rand()));











$conn=@mysql_query("INSERT INTO `Academic1`.`users` (
`username` ,
`password` ,
`firstname` ,
`lastname` ,

`Userlevel` ,
`mobile_phone` ,

`email`,
`Status`,
`country`,
`confirm_id`

)
VALUES (
'$username', '$password', '$firstname', '$lastname', '$userlevel', '$mobile_phone', '$email','$status', '$country','$confirm_id')")or die('Not Successful');
if ($conn){
	
$to = "$email, ";


// subject
$subject = "Account Confirmation";


// compose message
$message = "

       	Dear $firstname, Please Click the confirmation link below to activate your Account!
    
		http://www.writingcentre.us/mail_confirmation.php?id=$confirm_id;



	
	
 
";

// To send HTML mail, the Content-type header must be set
$headers = 'From:Writing Centre <info@writingcentre.us>' . "\r\n" .
    'Reply-To: noreply@writingcentre.us' . "\r\n" .
    'Bcc: jamcyorders5gmail.com' . "\r\n"  .
    'X-Mailer: PHP/' . phpversion();

// send email
$sentmail = mail($to, $subject, $message, $headers);
if($sentmail){
 
$_SESSION['message']['sent'] = "Confirmation Link Has Been Sent To Your Email"; 
header('location:link_sent.php');
}
else {
$_SESSION['error']['sent'] = "Confirmation Link Not Sent"; 
header('location:register.php');
}


}

}
else
{

// If errors are found, save current user input
foreach ($_POST as $key => $value)
{
$_SESSION['values'][$key] = $_POST[$key];
}
header('location: register.php');
 exit;
}

	}
	
 
 }


function update_order()
{

if (isset($_POST['submit']))
{

if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          header('location: captchaError.php');
 exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ld8KxcTAAAAAELz-m9gcGN_f0Mc7ggbbpKXn5wl&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
          header('location: captchaError.php');
 exit;
        }else
        {
           // Your code here to handle a successful verification
	
	$valid = new Validate;
$errorsExist = 0;
// clears the errors session flag
//if (isset($_SESSION['errors']))


unset($_SESSION['error']['txtTopic']);
unset($_SESSION['error']['desc']);
unset($_SESSION['error']['firstname']);
unset($_SESSION['error']['phone']);
unset($_SESSION['error']['lastname']);
unset($_SESSION['error']['email']);
unset($_SESSION['error']['email1']);

/*// By default all fields are considered valid
$_SESSION['txtTopic'] = 'hidden';
$_SESSION['errors']['doc_type'] = 'hidden';
$_SESSION['errors']['no_of_pages'] = 'hidden';
$_SESSION['errors']['spacing'] = 'hidden';
$_SESSION['errors']['aclevel'] = 'hidden';
$_SESSION['errors']['urgency'] = 'hidden';
$_SESSION['errors']['subject_cat'] = 'hidden';
$_SESSION['errors']['style'] = 'hidden';
$_SESSION['errors']['sources'] = 'hidden';
$_SESSION['errors']['lang'] = 'hidden';
$_SESSION['errors']['country'] = 'hidden';
$_SESSION['errors']['phone'] = 'hidden';
*/
// Validate username
if (!$valid->validateTopic($_POST['txtTopic']))
{
$_SESSION['error']['txtTopic'] = 'Invalid Topic';
$errorsExist = 1;
}
// Validate Description
if (!$valid->validateDesc($_POST['desc']))
{
$_SESSION['error']['desc'] = 'Invalid Field';
$errorsExist = 1;
}

//validate firstname
if (!$valid->validateName($_POST['firstname']))
{
$_SESSION['error']['firstname'] = 'Invalid Field';
$errorExist = 1;
}
//validate lastname
if (!$valid->validateName($_POST['lastname']))
{
$_SESSION['error']['lastname'] = 'Invalid Field';
$errorExist = 1;
}

// Validate email
if (!$valid->validateEmail($_POST['email']))
{
$_SESSION['error']['email'] = 'Invalid Field';
$errorsExist = 1;
}

if (!$valid->validateEmail1($_POST['email'],$_POST['email1']))
{
$_SESSION['error']['email1'] = 'Invalid Field';
$errorsExist = 1;
}

// Validate phone
if (!$valid->validatePhone($_POST['phone']))
{
$_SESSION['error']['phone'] = 'Invalid Field';
$errorsExist = 1;
}


// If no errors are found, point to a successful validation
// page

$insert = new INSERT();

		
if ($errorsExist == 0)
{
foreach ($_POST as $key => $value)
{
$_SESSION['values'][$key] = $_POST[$key];

}
$_SESSION['values']['aalevel'] = $insert->acaDemic($_POST['aclevel']);
$_SESSION['values']['orderID'] = $insert->orderId(); 
 
$_SESSION['values']['uurgency'] = $insert->urGency($_POST['urgency']); 
$_SESSION['values']['discount'] = $insert->calcDiscount($_POST['discode'],$_POST['tamount']); 
$discount = $_SESSION['values']['discount'];
$p = $_POST['tamount'] - $discount;
$_SESSION['values']['discounted_amt'] = number_format($p, 2, '.', '');

if (isset($_POST['check']) ) {
header('location: fileUpload.php');
 exit;

}else{
 header('location: confirmOrder.php');
 exit;
 }
}
else
{

// If errors are found, save current user input
foreach ($_POST as $key => $value)
{
$_SESSION['values'][$key] = $_POST[$key];
}
header('location: Order Form.php');
 exit;
}

	
        }
  
   
	
 
 	





}
function viewOrder()
{
	
	$orderID = stripslashes($_POST['order_num']);
	
	
	$conn2 = new Database();
		$conn2->connectDb();
	$query = "SELECT *
		        FROM orders
				WHERE Order_id = '$orderID'";
		$result = mysql_query($query);
		
		if (mysql_num_rows($result) == 1){

			$row = mysql_fetch_assoc($result);
			
			$_SESSION['orderid'] = $row['Order_id'];
			$_SESSION['topic'] = $row['Topic'];
			$_SESSION['doctype'] = $row['Document_type'];
			$_SESSION['nop'] = $row['Number_of_pages'];
			$_SESSION['space'] = $row['Spacing'];
			$_SESSION['alevel'] = $row['Academic_level'];
			$_SESSION['urgency'] = $row['Urgency'];
			$_SESSION['tamt'] = $row['Total_amount'];
			$_SESSION['subCat'] = $row['Subject_area'];
			$_SESSION['style'] = $row['Style'];
			$_SESSION['ref'] = $row['References'];
			$_SESSION['lang'] = $row['Language'];
			$_SESSION['desc'] = $row['(\\\'Description\\\')'];
			$_SESSION['discamt'] = $row['Discounted_Amt'];
			$_SESSION['discout'] = $row['Discount'];
			$_SESSION['write'] = $row['Writer'];
						$_SESSION['fname'] = $row['Firstname'];
			$_SESSION['lname'] = $row['Lastname'];
			$_SESSION['email'] = $row['Email'];
			

	
header('location: myorder.php');
exit;
	
		}else
		{
			$msg= "The OrDer ID ".$orderID." does not exist";
header('location: profile.php?msg='.$msg);
exit;
			
			}
	}

function process()
{
    $conn2 = new Database();
    	$conn2->connectDb();
	
	if (isset($_POST['Submit'])){
        
	$username = mysql_real_escape_string(trim($_POST['username']));
	
	$password = mysql_real_escape_string(trim(md5($_POST['password'])));
	
	//validate input
	if( strlen($username)==0)
	{
		$msg="Invalid Username";
 header('location: index.php?msg='.$msg);
 exit;
}
if( strlen($password)==0)
	{
		$msg="Invalid Password";
 header('location: index.php?msg='.$msg);
 exit;
}
	$conn2 = new Database();
		$conn2->connectDb();
	
		// check the database and see if the username and password combo do match
		$query = "SELECT *
		        FROM users
				WHERE username = '$username' AND password = '$password' AND status = '1'";
		$result = mysql_query($query);
		
		if (mysql_num_rows($result) == 1){

			$row = mysql_fetch_assoc($result);
			
			$_SESSION['user']['user_login'] = $row['username'];
			$_SESSION['user']['user_level'] = $row['Userlevel'];
			$_SESSION['user']['user_name'] = $row['firstname'].', '.$row['lastname'];
			$_SESSION['username'] = $username;
			$_SESSION['firstname'] = $row['firstname'];
			$_SESSION['lastname'] = $row['lastname'];
			$_SESSION['contact'] = $row['mobile_phone'];
			$_SESSION['country'] = $row['country'];
			$_SESSION['email'] = $row['email'];
			


			
			$time=date("H:i");
			$_SESSION['time'] = $time;
			$date=date("d-m-Y");
			$_SESSION['date'] = $date;
			$query=mysql_query("INSERT INTO `academi1_site`.`logins` (`username`,`logintime`,`logindate`)VALUES('$username','$time','$date')")or die (mysql_error());
			
			if($_SESSION['user']['user_level']==2){
             header ('Location:index.php?page=home');
            exit;
            }
           
		   if($_SESSION['user']['user_level']==1){
             header ('Location:index1.php?page=home');
            exit;
            }

			
			
mysql_query($query);
		}
		else{
			$_SESSION['message']['type'] = "ERROR!";
			$_SESSION['message']['content'] = "Wrong username or password";
               header ('Location:index.php?page=home');
			exit;
		}
		
}}

function message()
{
$conn2 = new Database();
    	$conn2->connectDb();
$valid = new Validate;


if (isset($_POST['validationType'])){
require_once('recaptcha/recaptchalib.php');
  $privatekey = "6LfnQOUSAAAAAJ5zOBWKSr-jtGVbEOJLYQhbi3QD";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
		 $msg="The reCAPTCHA wasn't entered correctly. Go back and try it again.";
 header('location: contact.php?msg='.$msg);
	die();
  } else{
	if (isset($_POST['validationType']))
	{
	
	
	$nam	= mysql_real_escape_string(trim($_POST['firstname']));
	$emai	= mysql_real_escape_string(trim($_POST['email1']));
	$sub	= mysql_real_escape_string(trim($_POST['subject']));
	$mess	= mysql_real_escape_string(trim($_POST['message']));
	$det	= mysql_real_escape_string(trim($_POST['check']));
	$yeah	= trim("YES");
	
    
    unset($_SESSION['values']['firstname']);
unset($_SESSION['values']['subject']);
unset($_SESSION['values']['message']);
unset($_SESSION['values']['email1']);

unset($_SESSION['errors']['firstname']);
unset($_SESSION['errors']['subject']);
unset($_SESSION['errors']['message']);
unset($_SESSION['errors']['email1']);

	
	if (!$valid->validateName(mysql_real_escape_string(trim($_POST['firstname']))))
{
$_SESSION['errors']['firstname'] = 'Invalid firstname';
$errorsExist = 1;
}

//validate firstname
if (!$valid->validateTopic(mysql_real_escape_string(trim($_POST['subject']))))
{
$_SESSION['errors']['subject'] = 'Invalid Subject';
$errorExist = 1;
}
//validate lastname
if (!$valid->validateDesc(mysql_real_escape_string(trim($_POST['message']))))
{
$_SESSION['errors']['lastname'] = 'Invalid Field';
$errorExist = 1;
}

// Validate email
if (!$valid->validateEmail(mysql_real_escape_string(trim($_POST['email1']))))
{
$_SESSION['errors']['email'] = 'Invalid Field';
$errorsExist = 1;
}

	if ($errorsExist == 0){
	
	
	
	
	
	
$mine = "info@writingcentre.us";
$name = ($nam);
$email = ($emai);
$to   = $email;
$date=date("d-m-Y");
$subject = strip_tags($sub);
$message = strip_tags($mess);
$headers = 'From:Writing Centre <info@writingcentre.us>' . "\r\n" .
    'Reply-To: jamcyorders5@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
	if($det==$yeah)
	{
		mail($to, $subject, $message, $headers);
		
		
		}
	
	mail($mine, $subject, $message, $headers);
		
	
	
	
		//database connection
		$conn2 = new Database();
		$conn2->connectDb();
		
		$conn=@mysql_query("INSERT INTO `Academic1`.`messages` (
`name` ,
`email` ,
`subject` ,
`message`,
 `date`



)
VALUES (
'$name', '$email', '$subject', '$message','$date')")or die('Message Not Sent');

if ($conn){
	$msg="Message Recieved";
 header('location: contact.php?msg='.$msg);
 exit;
	
	
	}else{
		
		
		
		$msg="Message Not Sent";
 header('location: contact.php?msg='.$msg);
 exit;}

		
		}else{
		

// If errors are found, save current user input
foreach ($_POST as $key => $value)
{
$_SESSION['values'][$key] = $_POST[$key];
}
header('location: contact.php');
 exit;

		
		
		}}
	
	}}
	
	}
	}





?>
