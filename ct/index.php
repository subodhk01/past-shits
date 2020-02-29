<!DOCTYPE HTML>
<html>
<head>
     <?php

     
        include ("connection.php");
    
    
    
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
    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css" />
    
    
    <script LANGUAGE="JavaScript">

function checkEmail(myForm) {
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value)){
return (true)
}
document.getElementById("email-validate").innerHTML = "Please enter a valid Email Address";
return (false)
}



function checkForm(form)
  {

    if(form.name.value == ""){
        document.getElementById("name-validate").innerHTML = "Name field cannot be blank";
        form.name.focus();
        return false;
    } else {
        document.getElementById("name-validate").innerHTML = "";
    }
    
    if(form.email.value == ""){
        document.getElementById("email-validate").innerHTML = "Email field cannot be blank";
        form.email.focus();
        return false;
    }else {
        document.getElementById("email-validate").innerHTML = "";
    }
    
    if(form.password.value == ""){
        document.getElementById("pass-validate").innerHTML = "Password field cannot be blank";
        form.password.focus();
        return false;
    }else {
        document.getElementById("pass-validate").innerHTML = "";
    }
    
    if(form.cpassword.value == ""){
        document.getElementById("cpass-validate").innerHTML = "Please confirm your password";
        form.cpassword.focus();
        return false;
    }else {
        document.getElementById("cpass-validate").innerHTML = "";
    }
    
    if(form.password.value.length < 6) {
        document.getElementById("pass-validate").innerHTML = "Password must contain at least six characters";
        form.password.focus();
        return false;
      } else {
            document.getElementById("pass-validate").innerHTML = "";
    }
      
    if(form.password.value == form.cpassword.value) {
            document.getElementById("cpass-validate").innerHTML = "";
    } else {
      document.getElementById("cpass-validate").innerHTML = "Your confirmed password dosn't match with the original";
      form.password.focus();
      return false;
    }

    
    return true;
  }
        function checkForm2(form)
  {
    
    if(form.email.value == ""){
        document.getElementById("email-validate2").innerHTML = "Email field cannot be blank";
        form.email.focus();
        return false;
    }else {
        document.getElementById("email-validate2").innerHTML = "";
    }
    
    if(form.password.value == ""){
        document.getElementById("pass-validate2").innerHTML = "Password field cannot be blank";
        form.password.focus();
        return false;
    }else {
        document.getElementById("pass-validate2").innerHTML = "";
    }
  

    
    return true;
  }
</script>
    
</head>

<body>




<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
    <div id="modal-header">
        To post a question or answer a question your need to either sign up or log in. Just a half minute process before you can completely use the site. 
    </div>
    
    <div id="modal-body">
        <div class="col-md-6" id="form1">
            <h2>Sign Up</h2>
            <p>It just takes a few seconds</p>
            <hr />
            <form onSubmit="return (checkEmail(this) && checkForm(this)) == 1;" method="POST" action="signup.php" id="signupform" name="signupform">
                <label>Enter Your Name:</label><br />
                <input type="text" placeholder="Enter Name" name="name" class="col-md-12 col-sm-12 col-xs-12 form-control" required="required" id="name" />
                <span id="name-validate" class="validate"></span>
                <br /><br />
                
                <label>Enter Your email address:</label><br />
                <input type="text" placeholder="Enter Email" name="email" id="email" class="col-md-12 col-sm-12 col-xs-12 form-control" required="required" id="email" />
                <span id="email-validate" class="validate"></span>
                <br /><br />
                
                <label>Enter a Password:</label><br />
                <input type="password" placeholder="Enter Password" name="psw" id="password" class="col-md-12 col-sm-12 col-xs-12 form-control" required="required"/>
                <span id="pass-validate" class="validate"></span>
                <br /><br />
                
                <label>Repeat your Password:</label><br />
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="cpassword" class="col-md-12 col-sm-12 col-xs-12 form-control" required="required" />
                <span id="cpass-validate" class="validate"></span>
                <br /><br />
                
                <br /><center><input type="submit" value="Sign Up" /></center>
            </form>
        </div>
        
        <div class="col-md-6" id="form2">
            <h2>Log In</h2>
            <p></p>
            <hr />
            <form method="POST" action="signin.php" id="signinform" name="signinform">    
                <label>Enter Your email address:</label><br />
                <input type="text" placeholder="Enter Email" name="email" class="col-md-12 col-sm-12 col-xs-12" /><br /><br />
                
                <label>Enter a Password:</label><br />
                <input type="password" placeholder="Enter Password" name="psw" class="col-md-12 col-sm-12 col-xs-12" /><br /><br />
                
                <center><a onclick="modalTrigger2()" style="font-size: 1.1em;">Forgot Password?</a></center>
                
                <br /><center><input type="submit" value="Log In" /></center>
            </form>
        </div>
    </div>

  </div>

</div>

<div id="myModal2" class="modal">
    <div class="modal-content" id="modal-content2">
    <span class="close" id="span2">&times;</span>
        <h2>Forgot Password</h2>
        <hr />
        <form method="POST" action="forgetpassword.php" id="forget" name="forget">
            <input type="email" name="email" placeholder="Enter your Email" />
            <input type="submit" value="Submit" />
        </form>
    </div>
</div>



        <header>
        
            <div class="col-md-5 header-part_Subodh">
                <a href="index.htm"><img src="imgs/logo_channeltalk.png" height="70px" /></a>
            </div> 
            
            <div class="col-md-7 header-part_Subodh" style="text-align: right;">
                <ul>
                    <a onclick="modalTrigger()"><li>Post Your Question</li></a>
                    <a onclick="modalTrigger()"><li>Sign Up</li></a>
                    <a onclick="modalTrigger()"><li>Log In</li></a>
                </ul>
            </div>
        
        </header>
        
        
        
        <div id="user-content_Subodh">
        
            <div class="content-part_Subodh col-md-3">
                <div id="content-1_Subodh">
                    <div id="content-1-welcome_Subodh">
                        New User<br /><a onclick="modalTrigger()"><span>Sign Up</span></a><br /><br />
                        Existing User<br /><a onclick="modalTrigger()"><span>Log In</span></a>
                    </div>
                    
                    <div id="content-1-TandR_Subodh">
                        <a href="index.htm"><div style="background-color: #D7D7D7 ;">  Trending  </div></a>
                        <a href="recents.php"><div>  Recent  </div></a>
                    </div>
                    
                    <div id="content-1-pyq_Subodh">
                        <a onclick="modalTrigger()"><div>Post Your Question</div></a>
                    </div>
                    
                    
                </div>
            </div>
            
            <div class="content-part_Subodh col-md-9">
                <div id="content-2_Subodh">
                    <h1>Trending</h1>
                    
                    <?php $sql = "SELECT * FROM questions ORDER BY q_count DESC";
                        $result = mysqli_query($conn,$sql);                    
                    while($row = mysqli_fetch_array($result)){
                        
                    echo '<div id="question-list_Subodh">';
                        echo '<div class="question-box">';
                           echo ' <div class="channel-name-box_Subodh"><td>' .$row['channel'].'</td></div>';
                            echo '<div class="question_Subodh"> <td>' .$row['question'].'</td>  <span class="question-number"></span></div>';
                            $sql1 = "SELECT * FROM replies where q_id=".$row['q_id']." ORDER BY r_date DESC LIMIT 3";
                                $ansshow = mysqli_query($conn,$sql1);
                                                                               
                             echo ' <div class="answers_Subodh">';
                                while($arow = mysqli_fetch_array($ansshow)){
                                    
                                        $sql2="SELECT * FROM user where u_id=".$arow['u_id']."";$result1 = mysqli_query($conn,$sql2);
                                    $urow=mysqli_fetch_array($result1);
                                    
                                echo '<p><span class="username">'.$urow['u_name'].'</span><br>';
                                    echo '&nbsp;&nbsp;&nbsp;<td>'.$arow['r_ans'].'</td>';
                                echo '</p>';
                                        
                                }
                                
                            echo '</div>';
                            
                            echo '<div class="end-box_Subodh">';
                                echo '<a onclick="modalTrigger()"><div class="col-xs-6" >Give an Answer</div></a>';
                                echo '<a onclick="modalTrigger()"><div class="col-xs-6" >View More Answers</div></a>';
                            echo '</div>';
                        echo '</div>';
                        
                    echo '</div>';
                        
                    }  ?>
                </div>
            </div>
        
        </div>
        
        
        <footer>
            
                <div>
                    <h1>Channel Talk</h1>
                    <a href="contact.htm">Add a Channel</a>&nbsp;&nbsp; - &nbsp;&nbsp;<a href="contact.htm">Contact Us</a>
                </div>
            
        </footer>




<script>
var modal = document.getElementById('myModal');
var modal2 = document.getElementById('myModal2');

var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementById('span2');

function modalTrigger() {
    modal.style.display = "block";
}
function modalTrigger2() {
    modal2.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}
span2.onclick = function() {
    modal2.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>


</body>
</html>