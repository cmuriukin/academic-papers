<?php
if(session_id() == ''){
session_start();
}
require_once "classes/dbInsert.php";

/**
 * uploadFile()
 * 
 * @param string $file_field name of file upload field in html form
 * @param bool $check_image check if uploaded file is a valid image
 * @param bool $random_name generate random filename for uploaded file
 * @return array
 */
function uploadFile ($file_field = null, $check_image = false, $random_name = false) {

unset ($_SESSION['upl']);
       
  //Config Section    
  //Set file upload path
 $path = 'uploads/'; //with trailing slash
 // $path = '/home/acadakfe/uploads/'; //with trailing slash
  //Set max file size in bytes
  $max_size = 10000000;
  //Set default file extension whitelist
  $whitelist_ext = array('jpg','png','gif','docx','doc','pdf','zip','rar');
  //Set default file type whitelist
  $whitelist_type = array('image/jpeg', 'image/png','image/gif');
$insert = new INSERT();
  //The Validation
  // Create an array to hold any output
  $out = array('error'=>null);
               
  if (!$file_field) {
    $out['error'][] = "Please specify a valid form field name";           
  }

  if (!$path) {
    $out['error'][] = "Please specify a valid upload path";               
  }
       
  if (count($out['error'])>0) {
    return $out;
  }

  //Make sure that there is a file
  if((!empty($_FILES[$file_field])) && ($_FILES[$file_field]['error'] == 0)) {
         
    // Get filename
    $file_info = pathinfo($_FILES[$file_field]['name']);
    $name = $file_info['filename'];
    $ext = $file_info['extension'];
               
    //Check file has the right extension           
    if (!in_array($ext, $whitelist_ext)) {
      $out['error'][] = "Invalid file Extension";
    }
               
    //Check that the file is of the right type
  /*  if (!in_array($_FILES[$file_field]["type"], $whitelist_type)) {
      $out['error'][] = "Invalid file Type";
    }*/
               
    //Check that the file is not too big
    if ($_FILES[$file_field]["size"] > $max_size) {
      $out['error'][] = "File is too big";
    }
               
    /*If $check image is set as true
    if ($check_image) {
      if (!getimagesize($_FILES[$file_field]['tmp_name'])) {
        $out['error'][] = "Uploaded file is not a valid image";
      }
    }*/

    //Create full filename including path
    if ($random_name) {
      // Generate random filename
      $tmp = str_replace(array('.',' '), array('',''), microtime());
                       
      if (!$tmp || $tmp == '') {
        $out['error'][] = "File must have a name";
      }     
     $new = $insert->orderId(); 
	  $newname =  $new.'.'.$ext;  
	  	$_SESSION['upl'] = $newname;                         
    } else {
        $newname = $name.'.'.$ext;
	$_SESSION['upl'] = $newname;  	
    }
      $_SESSION['upl'] = $newname;         
    //Check if file already exists on server
    if (file_exists($path.$newname)) {
      $out['error'][] = "A file with this name already exists";
    }

    if (count($out['error'])>0) {
      //The file has not correctly validated
      return $out;
    } 

    if (move_uploaded_file($_FILES[$file_field]['tmp_name'], $path.$newname)) {
      //Success
      $out['filepath'] = $path;
      $out['filename'] = $newname;
      return $out;
    } else {
      $out['error'][] = "Server Error!";
    }
         
  } else {
    $out['error'][] = "No file uploaded";
    return $out;
  }      
}
?>