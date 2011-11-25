<?php
require_once("config.php");

//database connect
function db_connect()
{
   $mysql_access = @mysql_pconnect(__CFG_HOSTNAME, __CFG_USERNAME, __CFG_PASSWORD); 

	
   mysql_select_db(__CFG_DATABASE, $mysql_access);
  
   return $mysql_access;

}

//store an image
function storeImage( $name, $dest  ){

	if (move_uploaded_file($_FILES[$name]['tmp_name'], $dest) ) {
	  return $filename;	  
	  	echo "file name $filename <br>";
	} else {
	   print "Possible file upload attack!  Here's some debugging info:\n";
	   return 0;
	}		
}

/****************
or die("<b>A fatal MySQL error occured</b>.\n<br />Query: " . $sql . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());
*****************/

 function birthday_calc ($year,$m,$d)
{
/*  calculates someone's age.
$year - year you were born
$m - month you were born
$d - day you were born    */

$res1 = date("Y") - $year;
$res2 = date("m") - $m;
$res3 = date("j") - $d;


	if ($res2<0 || $res3<0) echo "Your age: " .  ($res1-1); // prints age

	// if the result of the rest of the months or days is negative,
	// I owe you a month or day, so your age has not yet changed this year.

	else echo 'Your age: ' . $res1; // prints age

}  // end function

// validate an email
function valid_email($address)
{
  // check an email address is possibly valid
  if (ereg("^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $address))
    return true;
  else 
    return false;
}

//build email functions
function multipart_email_headers($boundary){
	$headers = "From: " . __CFG_Admin_EmailName . " <" . __CFG_Admin_Email . ">\n" 
			. "Content-Type: multipart/alternative; boundary=\"".$boundary."\"\n"
			. "MIME-Version: 1.0\n"
			. "Return-path: <" . __CFG_Admin_Email . ">";
	return $headers;
}

function html_email_header($boundary){
	$html_email_header = "--". $boundary . "\n" .  
		"Content-Type: text/html; charset=\"US-ASCII\"\n" .
		"Content-Transfer-Encoding: 7bit\n\n
		<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\"><html><body>";
	return $html_email_header;
}

function text_email_header($boundary){
	$text_email_header = "This is a multi-part message in MIME format.\n\n" .
            "--".$boundary."\n" .
            "Content-Type: text/plain; charset=us-ascii\n" .
            "Content-Transfer-Encoding: 7bit\n\n" . 
			"\n\n";
	return $text_email_header;
}

function html_email_footer($id,$boundary){
	$html_emailFooter = "<div style='text-align:center;font-size:10px;margin:20px 0 0 0;'>To unsubcribe from this email click <a href='".__CFG_HomePage."/index.php?mode=email&action=unsubscribe&id=".$id."'>here</a>.  All of your information will be deleted form our database forever and we will never contact you again.  But we will miss you.</div></body></html>" . "\n\n--" . $boundary . "--";
	return $html_emailFooter;
}

function text_email_footer($id){
	$text_emailFooter = "\n\nTo unsubcribe from this email list copy/paste the following address into your browser:
".__CFG_HomePage."/index.php?mode=email&action=unsubscribe&id=".$id.". All of your information will be deleted form our database forever and we will never contact you again.  But we will miss you." . "\n\n";
	return $text_emailFooter;
}

function mail_multi_alt($email,$boundary,$subject,$text,$html,$id){	

	$headers = multipart_email_headers($boundary);
	
	$html_header = html_email_header($boundary);
	$text_header = text_email_header($boundary);
	
	$html_emailFooter = html_email_footer($id,$boundary);
	$text_emailFooter = text_email_footer($id);
	
	$full_text = $text_header . $text . $text_emailFooter;
			
	$full_html =  $html_header . $html . $html_emailFooter;
	
	$message = $full_text . $full_html;
	mail($email,$subject,$message,$headers);	
}
?>