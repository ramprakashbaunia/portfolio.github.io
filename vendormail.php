<?php

$to = array("contact@trivida.in");

$msg .= "Name : " . $_POST["company"] . "<br/>\n";

$msg .= "Age of company/firm in Years  : " . $_POST["agecompany"] . "<br/>\n";
$msg .= "Age of company/firm in Months  : " . $_POST["monthcompany"] . "<br/>\n";
$msg .= "General details of service/goods : " . $_POST["services"] . "<br/>\n";
$msg .= "Geographic service area : " . $_POST["servicearea"] . "<br/>\n";
$msg .= "CIN/ registration number : " . $_POST["cinreg"] . "<br/>\n";
$msg .= "GST no. : " . $_POST["gst"] . "<br/>\n";
$msg .= "Designation : " . $_POST["designation"] . "<br/>\n";
$msg .= "Email : " . $_POST["email"]. "<br/>\n";
$msg .= "Website : " . $_POST["website"] . "<br/>\n";
$msg .= "Mobile : " . $_POST["phone"]. "<br/>\n";




$msg .= "Mailing  address : " . $_POST["mailadd"] . "<br/>\n";
$msg .= "Business type : " . $_POST["fav_services"] . "<br/>\n";








$email=$_POST["email"];



$strSubject = "enquiry-Vendorform";



$strHeader .= "MIME-Version: 1.0\r\n";



$strHeader .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



$strHeader .= "From: enquiry-trivida-Vendor <$email>\nReply-To:$email";



$strVar = "enquiry-trivida-Vendor";


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
location.href = 'vendor.php'
</script>