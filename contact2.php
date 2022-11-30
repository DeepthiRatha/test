<?php
/**
 * @author innova8ive.com
 * @copyright 2011
 */

if(isset($_REQUEST['fname']))
{
		include('sendmail.class.php');
		$to='info@dsssteel.com';
		
		$subject=$_REQUEST['subject'];
		$email_msg="First Name : ".$_REQUEST['fname']."
                    <br><br>Last Name: ".$_REQUEST['lname']."
					<br><br>Email: ".$_REQUEST['email']."
					<br><br>Contact Number: ".$_REQUEST['cphone']."
                    <br><br>Message: ".$_REQUEST['cmessage'];
                    
		$from=$_REQUEST['email'];
		

		$m= new Mail; // create the mail
        $m->From($from);
        $m->To( $to );
		
		// $m->To( $cc );
        $m->Subject( $subject );
       
        $m->Body( $email_msg);        // set the body
        //$m->Cc( "someone@somewhere.fr");
       
		$m->Priority(4) ;        // set the priority to Low
                // attach a file of type image/gif
	   // send the mail*/
		if($m->Send())
		{
			$res="Your message has been sent!";
		}else
		{
			$res="Error:Email not send!";
		}
		header("Location: thank-you.html");
		exit(0);
}
?>