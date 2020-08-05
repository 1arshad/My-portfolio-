<?php 
if(isset($_REQUEST['submit'])){


if(($_REQUEST['name']=="") || ($_REQUEST['email']=="") || ($_REQUEST['message']=="" ))
{
echo "<script type='text/javascript'>alert('Please fill all the mendatory fields.');
window.location='contact.html';
</script>";
}
else
{
$name= $_REQUEST['name'];
$subject=$_REQUEST ['subject'];
$email= $_REQUEST['email'];
$message= $_REQUEST['message'];
	$mailTo="arshadqadri321@gmail.com";
	$subject="Portfolio website";
	$txt="Name : ".$name.".\n\nMessage : ".$message.".\n\nEmail : ".$email;
	$headers="From : ".$email;
	mail($mailTo, $subject, $txt, $headers); 

echo "<script type='text/javascript'>alert('Message sent successfully.');
	window.location='contact.html';
</script>";
}}
?>