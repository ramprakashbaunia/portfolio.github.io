<?php

$to = array("contact@trivida.in");

$msg .= "Name : " . $_POST["username"] . "<br/>\n";

$msg .= "DOB  : " . $_POST["dob"] . "<br/>\n";
$msg .= "Gender : " . $_POST["fav_gender"] . "<br/>\n";
$msg .= "Present address : " . $_POST["preaddress"] . "<br/>\n";
$msg .= "Permanant address : " . $_POST["peraddress"] . "<br/>\n";
$msg .= "Qualification : " . $_POST["qualification"] . "<br/>\n";
$msg .= "Technical qualification : " . $_POST["techqualification"] . "<br/>\n";

$msg .= "Discipline of technical qualification : " . $_POST["discipline"] . "<br/>\n";





$msg .= "Work Experience : " . $_POST["workexperience"] . "<br/>\n";
$msg .= "Key Skills : " . $_POST["keyskills"] . "<br/>\n";
$msg .= "Computer knowledge details. : " . $_POST["computerknowledge"] . "<br/>\n";
$msg .= "Geographic area like to work : " . $_POST["geographicalareawork"] . "<br/>\n";
$msg .= "Computer knowledge details. : " . $_POST["computerknowledge"] . "<br/>\n";

$msg .= "Mobile : " . $_POST["phone"]. "<br/>\n";
$msg .= "Email : " . $_POST["email"]. "<br/>\n";

$tmpfile = $_FILES["fileToUpload"]['tmp_name'];
$allowedExts = array("pdf", "doc", "docx"); 

$fname = $_FILES["fileToUpload"]["name"];

$ext = end((explode(".", $fname))); # extra () to prevent notice

$source = "uploads/ENQ_".date('ymdhis').".".$ext;
move_uploaded_file($tmpfile, $source);

$msg .= "ID Proof Link :  <a href='https://trivida.in/$source' target='_BLANK'>Click Here To View/Download Resume</a><br/>\n";

$tmpfile = $_FILES["Uploadfile"]['tmp_name'];
$allowedExts = array("pdf", "doc", "docx"); 

$fname = $_FILES["Uploadfile"]["name"];

$ext = end((explode(".", $fname))); # extra () to prevent notice

$source = "uploads/ENQ1_".time().".".$ext;
move_uploaded_file($tmpfile, $source);

$msg .= "Attach qualification document :  <a href='https://trivida.in/$source' target='_BLANK'>Click Here To View/Download qualification document</a><br/>\n";

	$tmpfile = $_FILES["experience"]['tmp_name'];
	$allowedExts = array("pdf", "doc", "docx"); 
	
	$fname = $_FILES["experience"]["name"];
	
	$ext = end((explode(".", $fname))); # extra () to prevent notice
	
	$source = "uploads/ENQ1_".time().".".$ext;
	move_uploaded_file($tmpfile, $source);
	
	$msg .= "Attach experience Certificate :  <a href='https://trivida.in/$source' target='_BLANK'>Click Here To View/Download experience Certificate</a>";







$email=$_POST["email"];



$strSubject = "enquiry-hrform";



$strHeader .= "MIME-Version: 1.0\r\n";



$strHeader .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



$strHeader .= "From: enquiry-trivida-hr <$email>\nReply-To:$email";



$strVar = "enquiry-trivida-hr";


$strMessage=$msg;

foreach ($to as $tos) {



$flgSend = @mail($tos,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //


}


	if($flgSend)

     {

	//	echo "Mail send completed.";


	}


	else

	{


		echo "Cannot send mail.";


	}

 ?>

<script language="javascript">
alert("Thank you \n For your valuable feedback");
</script>



<script language="javascript">
location.href = 'hrregistrationform.php'
</script>