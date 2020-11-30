<?php

session_start();

require_once 'data.php';

//require 'mailer/class.phpmailer.php';
class  INSERT{
	
	var $username;
	var $password;
	var $firstname;
	var $lastname;
	var $userlevel;
	var $mobile_no;
	var $conn;
	
	public function __construct(){
		
		$this->username = 0;
		$this->password = 0;
		$this->firstname = 0;
		$this->lastname = 0;
		$this->mobile_no = 0;
		$this->userlevel = 0;
		$this->mobile_no = 0;
		$this->conn = new Database();
		}
	
	public function addUsers($us,$pw,$fn,$ln,$ul,$mn){
		
		$this->username = $us;
		$this->password =$pw;
		$this->firstname =$fn;
		$this->lastname =$ln;
		$this->userlevel =$ul;
		$this->mobile_no =$mn;
		
		
		$conn->connectDb();
		
		$query = mysql_query("INSERT INTO `contacts`.`users` (
		`FIRSTNAME` ,
		`LASTNAME` ,
		`MOBILE_NUMBER` ,
		`PASSWORD` ,
		`USERNAME` ,`USERLEVEL`)VALUES('$this->firstname','$this->lastname','$this->mobile_no','$this->password','$this->username','$this->userlevel')")or die(mysql_error());

return true;

}

// method to insert order
// method to insert order
public function addOrder($order_id,$topic,$doctype,$pagesnum,$space,$academic,$urgency,$totalamt,$pagecost,$subj_area,$style,$reference,$lang,$descrip,$fil,$writer,$firstname,$lastname,$email,$country,$contact,$discount,$discAmt)
{
$date=date("d-m-Y");
$order_id1 = strip_tags($order_id);
$topic1 = strip_tags($topic);
$doctype1 = strip_tags($doctype);
$nop1 = strip_tags($pagesnum);
$spacing1 = strip_tags($space);
$academic1 = strip_tags($academic);
$urgency1 = strip_tags($urgency);
$tamount1 = strip_tags($totalamt);
$cpp1 = strip_tags($pagecost);
$subject1 = strip_tags($subj_area);
$style1 = strip_tags($style);
$references1 = strip_tags($reference);
$language1 = strip_tags($lang);
$description = strip_tags($descrip);
$file =  strip_tags($fil);

if ($file == ""){

$file1 = " No Uploads";

}else{

$file1 = $file;

}


$writer1 = strip_tags($writer);
$fname1 = strip_tags($firstname);
$lname1 = strip_tags($lastname);
$email1 = strip_tags($email);
$country1 = strip_tags($country);
$contact1 = strip_tags($contact);
$discount1 = strip_tags($discount);	
$discAamt1 = strip_tags($discAmt);	
$jamcy = "jamcyorders5@gmail.com";


// multiple recipients (note the commas)
$to = "$email1,";


// subject
$subject = "Order #:$order_id1";


// compose message
$message = "

       	Dear $fname1,
    
	Order id: $order_id1
	
	Topic: $topic1
	
	Spacing: $spacing1
	
	Document Type: $doctype1

        Academic Level: $academic1
	
	Urgency: $urgency1
	
	Number of Pages: $nop1
	
	Subject Category: $subject1
	
	Total Amount: $tamount1
	
	Style: $style1
	
	Description: $description
	
	References: $references1
	
	Preferred Language: $language1
	
	You are: $fname1  $lname1
	
	Email: $email1
	
	Country: $country1
	
	Contact: $contact1
	
	Discount: $discount1
	
	Discounted Amount: $discAamt1
	
	
	
NB:
Your order will be assigned to a writer after you complete your payment. 
You will be contacted immediately your payment is received.

For more information:
	
Call this number : +(1) 3152150749
	   	OR
Email us: info@writingcentre.us 				

	
	
 
";

// To send HTML mail, the Content-type header must be set
$headers = 'From:Writing Centre <info@writingcentre.us>' . "\r\n" .
    'Reply-To: info@writingcentre.us' . "\r\n" .
   	'Bcc: jamcyorders5@gmail.com' . "\r\n"  .
'Bcc: jamcyorders5@gmail.com' . "\r\n"  .
   
    'X-Mailer: PHP/' . phpversion();

$send = new INSERT();
 //send email
$send = mail($to, $subject, $message, $headers);
if(!$send)
{
$_SESSION['mailsent'] = 'Mail Not Sent';

}


	$conn = new Database();
        $conn->connectDb();
		$query = mysql_query('SELECT Order_id FROM orders WHERE Order_id = "'.$order_id1.'"')or die(mysql_error());
if (mysql_num_rows($query) > 0){
	$_SESSION['orderId_exists'] = 'The order_id Exists. Place Another Order';
	header('Location: Order Form.php');
	}else{
	
	   mail($jamcy,$subject,$file1,$headers);
	
	
	
	
	
	
@mysql_query("INSERT INTO `writkqbl_writingcentre`.`orders` (
`Order_id` ,
`Topic` ,
`Document_type` ,
`Number_of_pages` ,
`Spacing` ,
`Academic_level` ,
`Urgency` ,
`Total_amount`,
`Cost_per_page`,
`Subject_area`,
`Style`,
`References`,
`Language`,
`Description`,
`Uploads`,
`Writer`,
`Firstname`,
`Lastname`,
`Email`,
`Date`,

`Country`,
`Contact`,
`Discount`,
`Discounted_Amt`






 

)
VALUES ('$order_id1', ('".addslashes($_POST['$topic1'])."'), '$doctype1', '$nop1', '$spacing1', '$academic1', '$urgency1', '$tamount1', '$cpp1','$subject1','$style1','$references1','$language1',('".addslashes($_POST['$description'])."'), '$file1',('".addslashes($_POST['$writer1'])."'),('".addslashes($_POST['$fname1'])."'), ('".addslashes($_POST['$lname1'])."'),'$email1', '$date', '$country1','$contact1','$discount1','$discAamt1')")or die(mysql_error());
return true;
}
}
public function acaDemic($value)
{
switch ($value) {
    case 1:
        $value = 'High school';
        break;
    case 2:
        $value = 'College';
        break;
    case 3:
        $value = 'University';
        break;
		
		 case 4:
        $value = 'Masters';
        break;
		 case 5:
        $value = 'PhD';
        break;
    default:
        $value = 'none';
}
return $value;

}



//urgency
public function urGency($value)
{
switch ($value) {
    case 1:
        $value = '10 days';
        break;
    case 2:
        $value = '7 days';
        break;
    case 3:
        $value = '5 days';
        break;
		
		 case 4:
        $value = '4 days';
        break;
		 case 5:
        $value = '3 days';
        break;
		
		case 6:
        $value = '48 Hours';
        break;
		case 7:
        $value = '24 Hours';
        break;
		case 8:
        $value = '12 hours';
        break;
		case 9:
        $value = '6 hours';
        break;
		case 10:
        $value = '3 Hours';
        break;
		
		case 0.5:
		
		$value = '1 Month';
		break;
		
		case 11:
		
		$value = '2 Weeks';
		break;
		case 12:
		
		$value = '3 Weeks';
		break;
    default:
        $value = '10 Days';
}

return $value;
}


//calculate discount

public function calcDiscount($code,$tmount)
{

if($code == WC247)
{
	$dis = (0.25 * $tmount);
	}else
	{
		$dis = "0.00";
		}
return $dis;
}
//calculate order number
public function orderId ()
{
$conn2 = new Database();
		$conn2->connectDb();

$result = mysql_query("SELECT Order_id FROM orders")or die(mysql_error());
if(mysql_num_rows($result) != 0){
	while($row=mysql_fetch_assoc($result)){
		$cat = $row['Order_id'];
		$arr[] = $cat;
		$max = max($arr);
		
		$order_id = $max + 1;
		}
	
	
	}else{
		$order_id = 70000;
		}

return $order_id;
}



public function sendMail($to1,$message1,$headers1)
{
	$to = strip_tags ($to1);
	$message = strip_tags($message1);
	$headers = strip_tags($headers1);
	
	
	//mail($to, $subject, $message, $headers);
	
	}
	
	public function confirmAccount($pkey,$table)
	{
	$conn = new Database();
        $conn->connectDb();
		$query = "SELECT Status FROM `$table` WHERE confirm_id='$pkey'";
 $result = mysql_query($query); 
 $check = mysql_num_rows($result);
 if($result['Status'] == 1){
	 $msg = "Your Have Already confirmed Your account."; 
header('location:http://www.academicresearchpapers.org/main/register.php?msg='.$msg);
	 
	 };

if($check == 1){
	
	$query = "UPDATE `$table` SET Status = 1 WHERE confirm_id ='$pkey'";
    mysql_query($query) or die(mysql_error());  
	
	 $msg = "Your Account Has been confirmed."; 
header('location:http://www.academicresearchpapers.org/register.php?msg='.$msg);
	 
	}else
	{
		$msg = "Your Account cannot be confirmed."; 
header('location:http://www.academicresearchpapers.org/register.php?msg='.$msg);
		}
		
		
		}
	
}


?>