<!DOCTYPE HTML>
<html>
<head>
    <?php

     
       include 'connection.php';
    session_start();
    if( !isset($_SESSION['login_user']) ){
        header("location: index.php");
    }
    
    ?>
	<title>Welcome to ChannelTalk - The YouTube Forum</title>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Subodh Verma" />
    <link rel="icon" type="image/gif/png" href="imgs/icon_channeltalk.png" />
    <link rel="stylesheet" href="index.css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap.min.css" />
    
    
    
  <script LANGUAGE="JavaScript">
    function checkForm(form) {
        if (form.answer.value == ""){
            document.getElementById("text-area").innerHTML = "Please enter your answer";
            form.answer.focus();
            return false;
        } else {
            document.getElementById("text-area").innerHTML = "";
            return true;
        }
    }
</script>  
</head>

<body>




        <header>
        
            <div class="col-md-5 header-part_Subodh">
                <a href="user.php"><img src="imgs/logo_channeltalk.png" height="70px" /></a>
            </div> 
            
            <div class="col-md-7 header-part_Subodh" style="text-align: right;">
                <ul>
                    <a href="postYourQuestion.php"><li>Post Your Question</li></a>
                </ul>
            </div>
        
        </header>
        
        
        
        
        <div id="question-content_Subodh">
                    
                 <div id="question-content-head_Subodh">
                     <?php $sql1 = "SELECT * FROM questions where q_id=".$_GET['id']."";
                                $result1 = mysqli_query($conn,$sql1);
                                $arow = mysqli_fetch_array($result1);
                            echo '<td>'.$arow['question'].'</td>';
                        $_SESSION['q_id']=$_GET['id'];
                     ?>
                 </div>   
                 
                 <div id="question-content-form_Subodh">
                    <form method="post" action="anspost.php" id="postans" name="postans">
                        <label>Enter Your Answer:</label><br />
                        <textarea rows="3" class="form-control" placeholder="Enter Your Answer" name="answer" id="answer" required="required" ></textarea>
                        <span id="text-area" style="color:  #EC4533;"></span><br /><br />
                        <input type="submit" value="Post" class="form-control" />
                    </form>
                 </div>
                 
                 <div id="question-content-answers_Subodh">
                    <h2>Other user's Answers</h2>
                     <?php $sql1 = "SELECT * FROM replies where q_id=".$_GET['id']."  ORDER BY r_date DESC";
                                $ansshow = mysqli_query($conn,$sql1);
                             
                             echo ' <div class="answers_Subodh">';
                                while($arow = mysqli_fetch_array($ansshow)){
                                    $sql2="SELECT * FROM user where u_id=".$arow['u_id']."";
                                    $result1 =mysqli_query($conn,$sql2);
                                    $urow=mysqli_fetch_array($result1);
                          
                                echo '<p><span class="username"><td>'.$urow['u_name'].'</td></span><br>';
                                    echo '&nbsp;&nbsp;&nbsp;<td>'.$arow['r_ans'].'</td>';
                                echo '</p>';
                                }?>
                   
                     
                 </div>
        
        </div>
        
        
        
        
        <footer>
            
                <div>
                    <h1>Channel Talk</h1>
                    <a href="contact.htm">Add a Channel</a>&nbsp;&nbsp; - &nbsp;&nbsp;<a href="contact.htm">Contact Us</a>
                </div>
            
        </footer>


</body>
</html>