<html>
    <body>
        <?php
include 'connection.php';

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
      
      $sql = "SELECT * FROM user WHERE u_email = '$myusername' and u_log = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      		
      if($count == 1) {
         
         $_SESSION['login_username'] = $row['u_name'];
          $_SESSION['login_user']=$myusername;
          $_SESSION['u_id']=$row['u_id'];
         
         header("location: user.php");
      }else {
         header("location: loginerr.htm");
      }
   }
?>
    </body>
</html>