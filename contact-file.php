<?php

$to = array("contact@trivida.in");

$msg .= "Name : " . $_POST["username"] . "<br/>\n";


$msg .= "Email : " . $_POST["email"]. "<br/>\n";


$msg .= "Mobile : " . $_POST["phone"]. "<br/>\n";

$msg .= "Message :  " .$_POST["message"] . "<br/>\n";



$email=$_POST["email"];



$strSubject = "enquiry-Contact";



$strHeader .= "MIME-Version: 1.0\r\n";



$strHeader .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



$strHeader .= "From: enquiry-trivida-Contact <$email>\nReply-To:$email";



$strVar = "enquiry-trivida-Contact";


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
location.href = 'contactus.php'
</script>