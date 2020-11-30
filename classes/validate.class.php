<?php
// load error handler and database configuration
require_once ('data.php');
// Class supports AJAX and PHP web form validation
class Validate
{

// stored database connection
//private $mMysqli;
// constructor opens database connection
/*function __construct()
{
$this->mMysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,
DB_DATABASE);
}
// destructor closes database connection
function __destruct()
{


$this->mMysqli->close();
}*/
// supports AJAX validation, verifies a single value
public function ValidateAJAX($inputValue, $fieldID)
{
// check which field is being validated and perform
// validation
switch($fieldID)
{
// Check if the Topic is valid
    
 case 'txtTopic':
return $this->validateTopic($inputValue);
break;

case 'fname':
return $this->validateName($inputValue);
break;

// Check if the name is valid
case 'lname':
return $this->validateName($inputValue);
break;

// Check if the name is valid
case 'desc':
return $this->validateName($inputValue);
break;
// Check if a gender was selected
case 'doc_type':
return $this->validateGender($inputValue);
break;
// Check if birth month is valid
case 'no_of_pages':
return $this->validateGender($inputValue);
break;
// Check if birth day is valid
case 'spacing':
return $this->validateGender($inputValue);
break;
// Check if academic Level is valid
case 'aclevel':
return $this->validateGender($inputValue);
break;
case 'urgency':
return $this->validateGender($inputValue);
break;

case 'subject_cat':
return $this->validateGender($inputValue);
break;

case 'style':
return $this->validateGender($inputValue);
break;

case 'sources':
return $this->validateGender($inputValue);
break;

case 'lang':
return $this->validateGender($inputValue);
break;

case 'country':
return $this->validateGender($inputValue);
break;
// Check if email is valid
case 'txtEmail':
return $this->validateEmail($inputValue);
break;
// Check if phone is valid
case 'phone':
return $this->validatePhone($inputValue);
break;
// Check if "I have read the terms" checkbox has been
// checked
case 'chkReadTerms':
return $this->validateReadTerms($inputValue);
break;
}
}
// validates all form fields on form submit
/*public function ValidatePHP()
{
error flag, becomes 1 when errors are found.
$errorsExist = 0;
// clears the errors session flag
if (isset($_SESSION['errors']))
unset($_SESSION['errors']);
// By default all fields are considered valid
$_SESSION['errors']['txtTopic'] = 'hidden';
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

// Validate username
if (!$this->validateUserName($_POST['txtTopic']))
{
$_SESSION['errors']['txtTopic'] = 'error';
$errorsExist = 1;
}
// Validate name
if (!$this->validateName($_POST['doc_type']))
{
$_SESSION['errors']['txtName'] = 'error';
$errorsExist = 1;


}
// Validate gender
if (!$this->validateGender($_POST['selGender']))
{
$_SESSION['errors']['selGender'] = 'error';
$errorsExist = 1;
}
// Validate birth month
if (!$this->validateBirthMonth($_POST['selBthMonth']))
{
$_SESSION['errors']['selBthMonth'] = 'error';
$errorsExist = 1;
}
// Validate birth day
if (!$this->validateBirthDay($_POST['txtBthDay']))
{
$_SESSION['errors']['txtBthDay'] = 'error';
$errorsExist = 1;
}
// Validate birth year and date
if (!$this->validateBirthYear($_POST['selBthMonth'] . '#' .
$_POST['txtBthDay'] . '#' .
$_POST['txtBthYear']))
{
$_SESSION['errors']['txtBthYear'] = 'error';
$errorsExist = 1;
}
// Validate email
if (!$this->validateEmail($_POST['txtEmail']))
{
$_SESSION['errors']['txtEmail'] = 'error';
$errorsExist = 1;
}
// Validate phone
if (!$this->validatePhone($_POST['txtPhone']))
{
$_SESSION['errors']['txtPhone'] = 'error';
$errorsExist = 1;
}

// Validate read terms
if (!isset($_POST['chkReadTerms']) ||!$this->validateReadTerms($_POST['chkReadTerms'])) {
$_SESSION['errors']['chkReadTerms'] = 'error';
$_SESSION['values']['chkReadTerms'] = '';
$errorsExist = 1;
}
// If no errors are found, point to a successful validation
// page
if ($errorsExist == 0)
{
return 'allok.php';
}
else
{
// If errors are found, save current user input
foreach ($_POST as $key => $value)
{
$_SESSION['values'][$key] = $_POST[$key];
}
return 'index.php';
}
}*/
// validate user name (must be empty, and must not be already
// registered)
public function validateUserName($value)
{
// trim and escape input value
$value = mysql_real_escape_string(trim($value));
// empty user name is not valid
if ($value == null)
return 0; // not valid
// check if the username exists in the database
$conn2 = new Database();
		$conn2->connectDb();
//$query =mysql_query ('SELECT user_name FROM users WHERE user_name="' .$value . '"');
$query = mysql_query('SELECT username FROM users WHERE username = "'.$value.'"')or die(mysql_error());
if (mysql_num_rows($query) > 0)
return '0'; // not valid
else
return '1'; // valid


}
// validate name
public function validateName($value)
{
// trim and escape input value
$value = trim($value);
// empty user name is not valid
if ($value != "" AND !is_numeric($value))
return 1; // valid
else
return 0; // not valid
}

public function validateTopic($value)
{
// trim and escape input value
$value = trim($value);
// empty user name is not valid
if ($value != "")
return 1; // valid
else
return 0; // not valid
}

public function validatePassword($value)
{
// trim and escape input value
$value = trim($value);
// empty user name is not valid
if ($value != "" AND strlen($value) >= 5)
return 1; // valid
else
return 0; // not valid
}

public function validateDesc($value)
{
// trim and escape input value
$value = trim($value);
// empty user name is not valid
if ($value != "")
return 1; // valid
else
return 0; // not valid
}
// validate gender
public function validateGender($value)
{
// user must have a gender
return ($value == '') ? 0 : 1;
}
// validate birth month
public function validateBirthMonth($value)
{
// month must be non-null, and between 1 and 12
return ($value == '' || $value > 12 || $value < 1) ? 0 : 1;
}
// validate birth day
public function validateBirthDay($value)
{
// day must be non-null, and between 1 and 31
return ($value == '' || $value > 31 || $value < 1) ? 0 : 1;
}
// validate birth year and the whole date
public function validateBirthYear($value)
{
// valid birth year is between 1900 and 2000
// get whole date (mm#dd#yyyy)
$date = explode('#', $value);
// date can't be valid if there is no day, month, or year
if (!$date[0]) return 0;
if (!$date[1] || !is_numeric($date[1])) return 0;


if (!$date[2] || !is_numeric($date[2])) return 0;
// check the date
return (checkdate($date[0], $date[1], $date[2])) ? 1 : 0;
}
// validate email
public function validateEmail($value)
{
// valid email formats: *@*.*, *@*.*.*, *.*@*.*, *.*@*.*.*)
return (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$^", $value)) ? 0 : 1;
}

 public function validateEmail1($value,$value1)
 {
 if(!($value == $value1)){
 
 return 0;
 }else
 {
 return 1;
 }
 
 } 
// validate phone
public function validatePhone($value)
{
// valid phone format: ###-###-####
return (!preg_match('^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$^',$value)) ? 0 : 1;
}
// check the user has read the terms of use
public function validateReadTerms($value)
{
// valid value is 'true'
return ($value == 'true' || $value == 'on') ? 1 : 0;
}
}
?>