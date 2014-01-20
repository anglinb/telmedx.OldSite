<?php

require_once('../includes/initialize.php');
//NOTHING ABOVE!!
//If if gets the sidebar
$sidebar_files = array("about.php","downloads.php","advisors.php","being_deployed.php","case.php","completed.php","contact.php","cookies.php","elder_care.php","hipaa_complient.php","investors.php","media.php","partners.php","privacy.php","products.php","remote.php","telvetx.php","telvetx2.php","terms.php","trials.php");

/*--------Divider-------------*/
//Routing...
//$request  = str_replace(DOC_BASE, "", $_SERVER['REQUEST_URI']); 
$request = substr($_SERVER['REQUEST_URI'],1);
$request = str_replace("-", "_", $request);
$params     = explode("/", $request);

//echo BASE_PATH;
//var_dump($params);
if($params[0] == "ajax"){
	require(BASE_PATH.DS."ajax".DS."ajaxController.php");
	exit;
}

if($params[0] == ""){
	//Default Route
	$include_file = BASE_PATH.DS."index.php";
	$index = 0;
}else{
	//In of MVC, the $params[0] is the name of the controller
	$file_name = BASE_PATH.DS.$params[0].".php";

	if(file_exists($file_name)){//Check domain.com/page -> public_includes/page.php
		$include_file = $file_name;
	}elseif(file_exists(BASE_PATH.DS.$params[0])){//Check domain.com/page.php -> public_includes/page.php 
		//This is making sure old links don't result in 404 errors.
		$include_file = BASE_PATH.DS.$params[0];
	}else {

		$include_file =BASE_PATH.DS."index.php";
		$index = 0;
		$message = 'Sorry we could not find the page you are looking for. If you believe you got to this page as the result of a bug please <a href="contact-us">contact us</a>.';	
	}
}
$need_sidebar = false;
if(in_array($params[0], $sidebar_files) OR in_array($params[0].".php", $sidebar_files)){
	$need_sidebar = true;
}

//Tries to find extra script named file_before.php
$before = str_replace(".php", "", $include_file);
$before = $before."_before.php";
file_exists($before) ? require($before) : null;
/*--------Divider-------------*/
//Header
include(BASE_PATH.DS.'layout'.DS.'header.php');
//Main Content
//echo output_message($message);

isset($include_file) ? require($include_file) : require(BASE_PATH.DS."index.php");
//Footer
if($need_sidebar === true){
	include(BASE_PATH.DS.'layout'.DS.'rht_menu.php');
}
include(BASE_PATH.DS.'layout'.DS.'footer.php');
?>

