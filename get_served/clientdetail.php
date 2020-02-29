<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="index.min.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="icon" type="image/gif/png" href="s_get-served.jpg" />

	<title>Get Served | Ab koi tension nahi....</title>
</head>

<body>
              <?php
$name = $email = $number = $address = '';
		$name = $_POST['name'];
		$email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
if( $_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST[address]))
    {
        $body = "A user $name submitted the contact form: \n\n".
    "Name: $name \n\n".
    "Email: $email \n\n".
    "Contact No.: $contact \n\n".
$to = "animeshsaxena611@gmail.com";
$subject = "Get Served - User enquiry";


mail($to,$subject,$body);
    }else{
        $body = "A user  $name submitted the contact form: \n\n".
    "Name: $name \n\n".
    "Email: $email \n\n".
    "Contact No.: $contact \n\n".
"Address: $address \n\n".
$to = "animeshsaxena611@gmail.com";
$subject = "Get Served - User enquiry";


mail($to,$subject,$body);
    }
}

    
    
    
?>

        <div class="container-fluid logo">
            <div>
                <img src="s_get-served_small.jpg" />
            </div><br />
            <div>
                <div>
                    <p style="box-shadow:0px 0px 1px 1px grey;background-color: #318FD5;color: white; border-radius: 3px;padding: 0.8%;line-height: 1.7;"> Thank You For Choosing Us.<br />
                        <i class="fa fa-smile-o" aria-hidden="true"></i> <a href="http://getservedindia.in" style="color: #D8EAF3;">Click here</a> to return back.
                </div>
            </div>
        </div><br />
        
        
            
               
        <br /><br /><br />
        
        
        
        

</body>
</html>
