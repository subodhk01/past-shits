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
</head>

<body>



        <header>
        
            <div class="col-md-5 header-part_Subodh">
                <a href="index.php"><img src="imgs/logo_channeltalk.png" height="70px" /></a>
            </div> 
            
            <div class="col-md-7 header-part_Subodh" style="text-align: right;">
                <ul>
                    <a href="logout.php"><li>Log Out</li></a>
                </ul>
            </div>
        
        </header>
        
        
        <div id="posting-content_Subodh">
            
                <h2>
                    Post your question
                </h2><hr />
                
                <form method="POST" action="questionpost.php" id="questionpost" name="questionpost">
                            <label>Channel Name:</label>
                            <select name="list" id="list" class="form-control">
                                <option value="1"> BB Ki Vines</option>
                                <option value="2">Carry Minati</option>
                                <option value="3">TheViralFeverVideos(TVF)</option>
                                <option value="4">Being Indian</option>
                                <option value="5">All India Backchod</option>
                                <option value="6">Ashish Changlani Vines</option>
                                <option value="7">ManiaKi Duniya</option>
                                <option value="8">Unbox Therapy</option>
                                <option value="9">Mr. Gear</option>
                                <option value="10">youtwoTV</option>
                                <option value="11">East India Company</option>
                                <option value="12">Zakir Khan</option>
                                <option value="13">Baap Of Backchod</option>
                                <option value="14">Happii Fi</option>
                                <option value="15">Miscellaneous</option>
                            </select><br /><br />
                            
                            <label>Your Question:</label><br />
                            <textarea class="form-control" rows="4" placeholder="Enter Your Question" required="required" name="question"></textarea><br /><br />
                            
                            <input type="submit" style="font-weight: bold;" class="form-control" value="Submit" />
                </form>
            
        </div>
    <footer>
            
                <div>
                    <h1>Channel Talk</h1>
                    <a href="contact.htm">Add a Channel</a>&nbsp;&nbsp; - &nbsp;&nbsp;<a href="contact.htm">Contact Us</a>
                </div>
            
        </footer>


</body>
</html>