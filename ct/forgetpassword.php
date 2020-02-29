<html>
    <body>
        <?php
include 'connection.php';
         $email = '';
            function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
            }
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $email=test_input($_POST["email"]);
            $sql = "SELECT * FROM user WHERE u_email = '$email'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count == 1) {
                    session_start();
                    $_SESSION['login_username'] = $row['u_name'];
                    $_SESSION['login_user']=$email;
                    $_SESSION['u_id']=$row['u_id'];
                $body =" Dear User,<br>".
                  "Your request regarding your password recovery has been processed . Through the link below you can reset your password."
                                "http://www.channeltalk.in/resetmypassword.php?id='.$row["u_id"].'"

                    "Ignore if not requested."


$to = $email;
$subject = "Reset Password Link-Channel Talk";


mail($to,$subject,$body);
            }else{
                header("Location: forgetpassworderr.htm");
            }
        }
         ?>
    </body>
</html>