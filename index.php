<?php

//include all external files
require 'libs/Smarty.class.php';
require 'includes/functions.php';

//create new tpl object
$tpl = new smarty;

//define paramiters
$tpl->compile_check = true;
$tpl->debugging = false;
$tpl->left_delimiter = "<%";
$tpl->right_delimiter = "%>";

db_connect();
include 'includes/get_config_vars.php';

//assign email for contact
$tpl->assign('contactEmail', __CFG_ContactEmail);
$tpl->assign('homePage', __CFG_HomePage);
$tpl->assign('homePageUrl', __CFG_HomePageUrl);

foreach ($_REQUEST as $var => $value) 
	{
	${$var} = $value;
	$tpl->assign( $var,$value );
	}
// end assign vars
//build site
if($mode == "pp"){
	$tpl->display('info/pp.tpl');
	exit;
}
if($_REQUEST['mode'] ==  "email"){
	include 'scripts/email_list/unsubscribe.php';
	exit;
}

$mode = "home";
$tpl->assign('mode',$mode);
include 'scripts/events.php';
include 'scripts/standard.php';
include 'scripts/popup.php';
$tpl->display('home.tpl');


?>
