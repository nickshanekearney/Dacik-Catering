<?php
if ($_POST["email"]<>'') {
    $ToEmail = 'nicholasskearney@gmail.com';
    $EmailSubject = 'Site contact form';
    $mailheader = "From: ".$_POST["email"]."\r\n";
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $MESSAGE_BODY = "NAME : ".$_POST["name"]." | ";
    $MESSAGE_BODY .= "EMAIL : ".$_POST["email"]." |  "; 
    $MESSAGE_BODY .= "PHONE : ".$_POST["date"]."  | ";
    $MESSAGE_BODY = "DATE : ".$_POST["time"]." |  ";
    $MESSAGE_BODY .= "TIME : ".$_POST["people"]." "; 
    $MESSAGE_BODY .= "# OF PEOPLE : ".$_POST["phone"]." ";
     
     
    $MESSAGE_BODY .= "COMMENT : ".nl2br($_POST["comment"])."";
    
    
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
?>
Your message was sent
<?php
} else {
?>

<form action="email.php" method="post">
	 
	<input name="email" type="text" id="email" size="32"> 
	
	<input name="name" type="text" id="name" size="32"> 
	
	<input name="phone" type="text" id="name" size="32"> 
	
	<input name="date" type="text" id="email" size="32"> 
	
	<input name="time" type="text" id="name" size="32"> 
	
	<input name="people" type="text" id="name" size="32"> 
	
	<textarea name="comment" cols="45" rows="6" id="comment" class="bodytext"></textarea>
	
	<input type="submit" name="Submit" value="Send"> 
	 
</form>
<?php
};
?>