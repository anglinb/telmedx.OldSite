<?php
function redirect_to($location = NULL){
	if($location != NULL){
		header("Location: {$location}");
		exit;
	}
}
function output_message($message=""){
	if(!empty($message)){
		return '<div class="alert alert-info">
		 <button type="button" class="close" data-dismiss="alert">&times;</button>
		<h3>Alert!</h3><p>'.$message.'</p>
		</div>';
	}else {
		return "";
	}
}
function __autoload($class_name){
	$class_name = strtolower($class_name);
	$path = LIB_PATH.DS."{$class_name}.php";
	if(file_exists($path)){
		require_once($path);
	}else {
		die("The file {$class_name}.php could not be found.");
	}
}
function return_array_value($array,$index){//Useful for getting around getSomething()['index1'] which is illegal in php =< 5.3
	return $array[$index];
}
?>