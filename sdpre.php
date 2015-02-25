<?php
    session_start();
    
    $Chosen = $_SESSION['degreebtn'];
     $_SESSION['student'] = $_POST['studentYesNo'] ;
     $_SESSION['sid'] = $_POST['SID'] ;
     
     //print_r($_POST);
    //print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Software Dev</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
          <style>.error{color: #ff0000;}</style>
        
</head>

<body>
    
    <main>
    <div class="container">
        <h2>Software Development Prerequisities</h2>
    
    <div class="deadlines">    
        <p class="dead">Deadlines</p>
        <table>
                <tr>
                    <td>Fall quarter:</td>
                    <td>&nbsp;&nbsp;&nbsp;Aug 15</td>
                </tr>
                <tr>
                    <td>Winter quarter:</td>
                    <td>&nbsp;&nbsp;&nbsp;Dec 15</td>   
                </tr>
                <tr>
                    <td>Spring quarter:</td>
                    <td>&nbsp;&nbsp;&nbsp;Mar 15</td>  
                </tr>
                <tr>
                    <td>Summer quarter:</td>
                    <td>&nbsp;&nbsp;&nbsp;June 1</td>   
                </tr>
        </table>
    </div>
    <div id="center">
   
    <h3>Please check all that you have completed.</h3>
    <p>NOTE: If you don"t have all of the prerequisites, or have extensive industry experience, an advisor will contact
    you to discuss options</p>
    <div class="checkbox">
        <form method="post" action="education.php" >
        <Input type="checkbox" id="class" value="programming">Programming 1 and 2 (CS 141&145 or CS 131&132)<br/>
        <Input type="checkbox" id="class" value="database">IT 201: Database Fundamentals or equivalent<br/>
        <Input type="checkbox" id="class" value="linux">IT 190: Intro to Linux or LPI1, or Linux Essentials<br/>
        <Input type="checkbox" id="class" value="html">IT 121: HTML/CSS, or equivalent<br/><br/>
    </div>
    
    <label for="notes">Notes:</label><br/>
    <textarea rows="5" cols="50" name="notes">
        
    </textarea>
    
    <!--carry variables over from tellusmore.php-->
    <input type="hidden" name="studentYesNo" value="<?php echo $_POST['studentYesNo'];?>.php"/>
    <input type="hidden" name="SID" value="<?php echo $_POST["SID"];?>.php"/>
    <input type="hidden" name="specialstat" value="<?php echo $_POST['specialstat'];?>.php"/>
    
    <!--carry variables over from contactinfo.php-->
    <input type="hidden" name="fname" value="<?php echo $_POST['fname'];?>.php"/>
    <input type="hidden" name="lname" value="<?php echo $_POST['lname'];?>.php"/>
    <input type="hidden" name="degreebtn" value="<?php echo $_POST['degreebtn'];?>.php"/>
    <input type="hidden" name="mail" value="<?php echo $_POST['mail'];?>.php"/>
    <input type="hidden" name="phone" value="<?php echo $_POST['phone'];?>.php"/>

    <input type="submit" name="submit" value="Continue" class="btn btn-primary">
    </div>
    
    </div>
    </main>

</body>
</html>