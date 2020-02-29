<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Thank You  - ChannelTalk</title>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Subodh Verma" />
    <link rel="icon" type="image/gif/png" href="imgs/icon_channeltalk.png" />
    <link rel="stylesheet" href="index.css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap.min.css" />
</head>

<body>
              <?php
    


$name = $email = $number = $message = '';
		$name = $_POST['name'];
		$email = $_POST['email'];
        $channel = $_POST['channel'];
        $message = $_POST['query'];
            
if( $_SERVER["REQUEST_METHOD"]=="POST")
{
         
        $body = "A user submitted the enquiry form: \n\n".
                "Name: $name \n\n".
                "Email: $email \n\n".
                "Channel Name: $contact \n\n".
                "Query: $message \n\n".


$to = "subodhlucky6262@gmail.com";
$subject = "ChannelTalk - enquiry";


mail($to,$subject,$body);}    
?>

        <header>
        
            <div class="col-md-5 header-part_Subodh">
                <a href="index.htm"><img src="imgs/logo_channeltalk.png" height="70px" /></a>
            </div> 
            
            <div class="col-md-7 header-part_Subodh" style="text-align: right;">
                <ul>
                    <a><li>Post Your Question</li></a>
                </ul>
            </div>
        
        </header>
        
        
        <div style="padding: 50px 0px; font-family: Handlee;background-color: #E8E8E8;">
                <center>
                    
                        <h2>
                            ThankYou - We are glad to recieve your suggestions and queries.
                        </h2>
                        
                        <a href="contact.htm">Go back</a>
                
                </center>
        </div>
        
        
        <footer>
            
                <div>
                    <h1>Channel Talk</h1>
                    <a href="contact.htm">Add a Channel</a>&nbsp;&nbsp; - &nbsp;&nbsp;<a href="contact.htm">Contact Us</a>
                </div>
            
        </footer>
        

</body>
</html>
