<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Thankyou - We will be soon reaching you - Arjun Coaching Classes </title>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Subodh Verma" />
    <link rel="icon" type="image/gif/png" href="imageedit_2_9541667424.png" />
    <link rel="stylesheet" href="about.css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap.min.css" />
</head>

<body>
              <?php
    


$name = $email = $number = $message = '';
		$name = $_POST['name'];
		$email = $_POST['email'];
        $contact = $_POST['contact'];
        $message = $_POST['message'];
            
if( $_SERVER["REQUEST_METHOD"]=="POST")
{
         
        $body = "A user $name submitted the enquiry form: \n\n".
                "Name: $name \n\n".
                "Email: $email \n\n".
                "Contact No.: $contact \n\n".
                "Message: $message \n\n".


$to = "subodhlucky6262@gmail.com";
$subject = "Arjun Coaching Classes - Client enquiry";


mail($to,$subject,$body);}    
?>

        <header>
            
                <div class="col-sm-7 head-part-1_Subodh">
                     <a href="index.htm">ARJUN COACHING CLASSES </a>
                </div>
                <div class="col-sm-5 head-part-2_Subodh">
                    <nav>
                        <a href="index.htm"><li style="margin-right: 7px;">HOME</li></a>
                        <a href="about.htm"><li style="margin-left: 7px;">ABOUT</li></a>
                        <a href="contact.htm"><li style="margin-left: 7px;">CONTACT</li></a>
                    </nav>
                </div>
            
        </header>
        
        
        <div style="padding: 50px 0px; font-family: Handlee;background-color: #E8E8E8;">
                <center>
                    
                        <h2>
                            ThankYou - We will be soon reaching you.
                        </h2>
                        
                        <a href="contact.htm">Go back</a>
                
                </center>
        </div>
        

</body>
</html>
