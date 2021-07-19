<?php  
error_reporting(E_ALL & ~E_NOTICE);
$did_submit = $_POST['did_submit'];

var_dump($_POST);

if($did_submit){
    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);



//PHP Validation
$valid = true;
$errors = [];

//checking for how this could fail.

if(! filter_var($email, FILTER_VALIDATE_EMAIL) ){
	//this checks to see if the email is NOT valid
	$valid = false;
	$errors['email'] = 'You did not enter a valid email address.';
}


if($valid){
        echo 'valid';
    
        $to = 'chloegunter2019@gmail.com';
        $subject = 'Information sign-up';
        
        $body .= "Email: $email \n";
    
        $headers = "From: chloegunter2019@gmail.com \r\n";
        $headers .= "type: text/plain \r\n";
    
        $mail = mail($to, $subject, $body, $headers );
    
        echo $mail;
    
    }
    
    
    
    
    
    }//end of did_submit