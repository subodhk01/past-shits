<html>
    <body>
        <?php
include 'connection.php';
        session_start();
if( !isset($_SESSION['login_user']) ){
        header("location: index.php");
    }
        else{
       
            function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
            }
if( $_SERVER["REQUEST_METHOD"]=="POST")
{
    $ans = '';
    $ans = test_input($_POST["answer"]);
            if(empty($ans)){
                header("location: emptyans.php");
            }else{
                $sql="INSERT INTO `replies`(`r_ans`, `q_id`, `u_id`, `r_date`) VALUES ('". $ans ."','". $_SESSION['q_id'] ."','". $_SESSION['u_id'] ."',NOW())";
                $result = mysqli_query($conn, $sql);
                $sql1="SELECT * from questions WHERE q_id=". $_SESSION['q_id'] ."";
                $result2=mysqli_query($conn,$sql1);
                $row2=mysqli_fetch_array($result2);
                $deep=$row2['q_count'];
                $deep=$deep+1;
                $sql3="UPDATE `questions` SET `q_count`='.$deep.' WHERE q_id=". $_SESSION['q_id'] ."";
                $result3=mysqli_query($conn,$sql3);
                if($result){
                        header("location: user.php");}
                else{
                        header("location: pyqerr.htm");}
            }
            
        }
        }
        
        ?>
    </body>
</html>
