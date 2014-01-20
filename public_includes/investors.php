
<style type="text/css">
form {
	margin-top: 30px;
	margin-left: 48px;
}
input {
	display: inline-block;
}
input[type=text] {
   width: 250px;
     border: 1px solid #F7A84F;
  /* background-color: #E5A7A9;*/
  padding-left: 5px;
  color: #676767;

}
label {
	color: #f7941e;\
	font-size: 1.5em;
}
textarea {
	color: #676767;
	width: 100%;
	resize:vertical;
	min-height: 150px;
	font-family: 'Droid Sans', sans-serif;

  border: 1px solid #F7A84F;
  padding: 5px;
}
table {
	width: 550;
}
td {
	padding-top: 10px;
}
::-webkit-input-placeholder {
   font-style: italic;
}

:-moz-placeholder {  
   font-style: italic;  
}
/*455*/
</style>
<?php 
	$num_1 = rand(0,10);
	$num_2 = rand(0,10);
	$answer = $num_1 + $num_2;
	if(isset($_GET['for'])) {
		$for = "&for=" . $_GET['for'];
	}else { 
		$for = "";
	}
?>

	<?php if(isset($_GET['sucess'])) { if($_GET['sucess'] == 1) {$message = "Your message was sent!";}else { $message="Something went wrong; try again"; } include 'LIB_PATH/banner_yes.php';} ?>
<div id="page_cont_700">
	<h2 style="margin-bottom: 15px;">Potential Investors</h2>
	<div id="line" style="width: 150px; margin-top: 0px;"></div>
    <p>At telmedx we look forward to delivering 21st century healthcare solutions to emerging markets throughout the world. 

      <br />
      <br />
      Potential investors can register and access financial information at 
      <a href="http://www.gust.com/c/telmedx" target="_blank">www.gust.com/c/telmedx</a><br />
      or use the form below to contact us.<br />
      <br />
      Thank you for your interest in telmedx.</p>


      <p>Email: <strong style="color: #f7941e;">rlanglin[at]telmedx[dot]com</strong> <br> <br>The [at] is "@" and the dot is ".". It prevents spam.</p>
<!--<form name="contact" action="process.php?answer=<?php echo $answer . $for; ?>" method="post">
	<table cellpadding="0" cellspacing="0">
		<tr>
	<td><label for="first_name">First Name:</label></td>
	<td><input placeholder="first name" type="text" name="first_name" /></td>
		</tr>
		<tr>
	<td><label for="last_name">Last Name:</label></td>
	<td><input placeholder="last name" type="text" name="last_name" /></td>
		</tr>
		<tr>
	<td><label for="email">Email:</label></td>
	<td><input placeholder="you@domain.com" type="text" name="email" /></td>
		</tr>
		<tr>
	<td><label for="subject">Subject:</label></td>
	<td><input placeholder="subject" type="text" name="subject" /></td>
		</tr>
		<tr>
	<td><label for="message">Message:</label></td>
	<td><textarea placeholder="message" name="message"></textarea></td>
		</tr>
		<tr>
	<td><label for="math">Are you a human? <?php echo $num_1 . " + " . $num_2 . " = "; ?></label></td>
	<td><input name="math" placeholder="math here" type="text" /></td>
		</tr>
		<tr>
		<td></td>
	<td><input type="submit" name="submit" value="Submit" />
		<input type="reset" value="Clear" /> </td>
		</tr>
	</table>-->
</form>
</div>
