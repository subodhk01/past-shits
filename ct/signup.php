<html>
    <body>
        <?php
include 'connection.php';
$name = $email = $password = $repeatpassword = '';
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

if( $_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=test_input($_POST["name"]);
    $email=test_input($_POST["email"]);
    $password=test_input($_POST["psw"]);
    $repeatpassword=test_input($_POST["psw-repeat"]);
    
    if(empty($name))
    {
         header("location: signuperr.htm");
    }elseif(empty($email))
    {
        header("location: signuperr.htm");
    }elseif(empty($password))
    {
        header("location: signuperr.htm");
    }elseif($password==$repeatpassword)
        {
        $pass=crypt($password,'$6$s^9%p_r$v!d*a=242prot^&behk#gk');
        
            $query="INSERT INTO `user` (`u_name`, `u_email`, `u_log`, `u_date`) VALUES ('". $name ."','". $email ."','" .$pass ."', NOW())";
            $result = mysqli_query($conn, $query);
                if($result){
                    $body =" Dear ". $name ."<br>" 

"Thanks a lot for being a part of ChannelTalk, we are glad to welcome you. Now you can easily connect and communicate with your channelMates" "i.e. the fans of your favorite YouTube channel, and be a part of the discussions. You can post your questions as well as can answer to other's" "questions too."
"<br><br>"
"We hope you will enjoy your experience at ChannelTalk. For any queries or if you want to add your channel or suggest one, visit" "http://channeltalk.in/contact"


                                            "<h3>Thank You</h3>"


$to = $email;
$subject = "Thank You For Register in Channel Talk";


mail($to,$subject,$body);
                        header("location: user.php");
                }else
                        echo "Error in Processing. Please try again";
        }else{
            header("location: pswnm.htm");
        }
}   
?>
    </body>
</html>