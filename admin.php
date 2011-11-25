<?php
session_start();
//include all external files
require 'libs/Smarty.class.php';
require 'includes/functions.php';

db_connect();
include 'includes/get_config_vars.php';
//create new tpl object
$tpl = new smarty;

//define paramiters
$tpl->compile_check = true;
$tpl->debugging = false;
//$tpl->debugging = true;
$tpl->left_delimiter = "<%";
$tpl->right_delimiter = "%>";


//build site

//option to log out
if($_REQUEST['mode'] == 'logout'){
	session_destroy();
	$tpl->display('admin/login.tpl');
}
	
	
if ($_SESSION['cl_admin_ses']){

//assign post vars to vars
foreach ($_REQUEST as $var => $value) 
	{
	${$var} = $value;
	$tpl->assign( $var,$value );
	}
// end assign vars

	if (!$_REQUEST['mode']){
	$tpl->display('admin/pages/admin_home.tpl');
	}
	else
	{
		//begin page assignment for admin area
		if ($_REQUEST['mode'] == "plate"){
			
			if (!$_POST['action']){
				include 'scripts/admin/getAll.php';
				$tpl->display('admin/add_or_edit.tpl');
				}
				else
				{
				include 'scripts/admin/standard.php';
				}
		}
		
		if ($_REQUEST['mode'] == "press"){
			
			if (!$_POST['action']){
				include 'scripts/admin/getAll.php';
				$tpl->display('admin/add_or_edit.tpl');
				}
				else
				{
				include 'scripts/admin/standard.php';
				}
		}
		
		if ($_REQUEST['mode'] == "home"){
			
			if (!$_POST['action']){
				include 'scripts/admin/getAll.php';
				$tpl->display('admin/add_or_edit.tpl');
				}
				else
				{
				include 'scripts/admin/standard.php';
				}
		}
		
		
		if ($_REQUEST['mode'] == "popup"){
				include 'scripts/admin/popup.php';
		}
		
		if ($_REQUEST['mode'] == "events"){
			
			if (!$_POST['action']){
				include 'scripts/admin/getAll.php';
				$tpl->display('admin/add_or_edit.tpl');
				}
				else
				{
				include 'scripts/admin/standard.php';
				}
		}
		
		if ($_REQUEST['mode'] == "screenings"){
			
			if (!$_POST['action']){
				include 'scripts/admin/getAll.php';
				$tpl->display('admin/add_or_edit.tpl');
				}
				else
				{
				include 'scripts/admin/standard.php';
				}
		}
		
		if ($_REQUEST['mode'] == "movie"){
			
			if (!$_POST['action']){
				include 'scripts/admin/getAll.php';
				$tpl->display('admin/add_or_edit.tpl');
				}
				else
				{
				include 'scripts/admin/standard.php';
				}
		}
		
		if ($_REQUEST['mode'] == "contact"){
					
				if (!$_POST['action']){
				include 'scripts/admin/getAll.php';
				$tpl->display('admin/add_or_edit.tpl');
				}
				else
				{
				include 'scripts/admin/standard.php';
				}
		}
		
		if ($_REQUEST['mode'] == "filmMakers"){
					
				if (!$_POST['action']){
				include 'scripts/admin/getAll.php';
				$tpl->display('admin/add_or_edit.tpl');
				}
				else
				{
				include 'scripts/admin/standard.php';
				}
		}
		if($_REQUEST['mode'] == "users"){
			include "scripts/admin/users/users.php";
		}
		
		if($_REQUEST['mode'] == "email"){
			include "scripts/admin/email/post_emails.php";
		}
		
		if($_REQUEST['mode'] == "config"){
			include "scripts/admin/config/config.php";
		}
		
	}
	
}else{

	include 'scripts/admin/adminLogin.php';
	
}



?>
