<?php
session_start();
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
//build site
foreach ($_REQUEST as $var => $value) 
	{
	${$var} = $value;
	$tpl->assign( $var,$value );
	}
// end assign vars
//build site
$mode = "eventPopup";
$tpl->assign('mode',$mode);

include 'scripts/eventPopup.php';
$tpl->display('eventPopup.tpl');

if ($_REQUEST['mode'] == 'logout'){
	session_destroy();
	$tpl->display('index.tpl');
}

?>
