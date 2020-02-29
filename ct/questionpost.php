<html>
    <body>
        <?php
include 'connection.php';
        session_start();
if( !isset($_SESSION['login_user']) ){
        header("location: index.php");
    }
        else{
    echo"connected once again";
        $channel = $question = '';
            function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
            }
            $question=test_input($_POST["question"]);
            if(empty($question)){
                header("location: pyqerr.htm");
            }else{
                $sql="INSERT INTO `questions`(`channel`, `question`, `q_date`, `u_id`, `q_count`) VALUES ('". $channel ."','". $question ."',NOW(),'". $_SESSION['u_id'] ."','0')";
                $result = mysqli_query($conn, $sql);
                if($result){
                        header("location: user.php");}
                else{
                        header("location: pyqerr.htm");}
            }
            
        }
        
        ?>
    </body>
</html>