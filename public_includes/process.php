<?php 
if(isset($_POST['math']) && isset($_GET['answer']) && $_GET['answer'] == $_POST['math']) {
	if(isset($_POST['first_name'])) {
		$all_name = $_POST['first_name'] . " " . $_POST['last_name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$message .= "\n \n from " . $all_name;
		$message .= "\n \n at " . $email;
		$message = wordwrap($message, 70);
		$subject = $_POST['subject'];
		$address = array("poland" => "zblaszczyk@febit.pl");
		if(isset($_GET['for']) && array_key_exists($_GET['for'], $address)){
			$where_to = $address[$_GET['for']];
		}else {
			$where_to = "info@telmedx.com";
		}
		mail($where_to, $subject , $message);
		header("Location: contact.php?sucess=1");
		exit;
	}else {
		header('Location: telmedx.com');
		exit;
	}
}else {
	header('Location: contact.php?sucess=0');
	exit;
}	
?>