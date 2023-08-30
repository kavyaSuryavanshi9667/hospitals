<?php
include('database.inc.php');
$msg="";
if(isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['Address']) && isset($_POST['datetime'])&& isset($_POST['Hospital'])&& isset($_POST['Doctors'])&& isset($_POST['Demartment'])){
	$fname=mysqli_real_escape_string($con,$_POST['fname']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$Address=mysqli_real_escape_string($con,$_POST['Address']);
	$datetime=mysqli_real_escape_string($con,$_POST['datetime']);
	$Hospital=mysqli_real_escape_string($con,$_POST['Hospital']);
	$Doctors=mysqli_real_escape_string($con,$_POST['Doctors']);
	$Demartment=mysqli_real_escape_string($con,$_POST['Demartment']);
	
	mysqli_query($con,"insert into doctors(NAME,Email,mobile,Address,datetime,Hospital,Doctors,Demartment) values('$fname','$email','$mobile','$Address' ,'$datetime' ,'$Hospital' ,'$Doctors' ,'$Demartment' )");
	$msg="Thanks for Booking  a slot !!";
	
	$html="<table><tr><td>NAME</td><td>$fname</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>mobile</td><td>$mobile</td></tr><tr><td>Address</td><td>$Address</td></tr><tr><td>datetime-local</td><td>$datetime</td></tr><tr><td>Hospital</td><td>$Hospital</td></tr><tr><td>Doctors</td><td>$Doctors</td></tr><tr><td>Demartment</td><td>$Demartment</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tsl";
	$mail->SMTPAuth=true;
	$mail->Username="kavitakumarig9667@gmail.com";
	$mail->Password="fabvthruzuponxlr";
	$mail->SetFrom("kavitakumarig9667@gmail.com");
	$mail->addAddress("kavitakumarig9667@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		// echo "Mail send";
	}else{
		// echo "Error occur";
	}
	echo $msg;
}
?>