<?php
	
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$orgname = $_POST['orgname'];
	$mobile = $_POST['mobile'];
	$desc = $_POST['desc'];
	$to = 'narendra.v@novisync.com';
$mailmsg = '<h2>Get in Touch </h2>
	<br>
	<br> 
	Details<br>
	-------<br>
	Name 	: '.$name.'<br>
	Email  	: '.$email.'<br>
	Organization Name : '.$orgname.'<br>
	Mobile: '.$mobile.'<br>
	Description : '.$desc.'<br>
	<br>
	Thankyou.';
	  $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

   
    if (@mail($to, $email, $mailmsg, $headers))
    {
    	echo '<script>alert("Your Requirement is Recived ! we will reach you soon ");window.location.href="index.html"</script>'; 	
    }
	else
	{
		echo '<script>alert("Please Fill Requirement Again !");window.location.href="index.html"</script>';
	}
}
?>
