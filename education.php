<?php
 //this starts the session
    session_start();
    ob_start();

     //Turn on error reporting
    ini_set('display_errors', 1);
    //error_reporting(E_ALL);
    //print_r($_POST);
    //print_r($_SESSION);
    //echo session_id();
    $errors = array();

?>
<!DOCTYPE html>

<html>
<head>
    <title>Education</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
    <h1>Education</h1>
    
        Select highest degree achieved:
        <!-- Reserve for future POST method -->
        <form name="degree" action="email2.php" method="POST">
            <select name="degrees">
            <option value="HS">Highschool Diploma or GED</option>
            <option value="AS">Associates degree (AA, AS, AAS, AAS-T)</option>
            <option value="BA">Bachelors degree</option>
            <option value="MA">Masters degree</option>
            <option value="PhD">Ph.D.</option>
            </select>
        <br>
        
       
          How many college credits have you earned?: 
          <input class="form-group" type="number" name="credits" value=" ">
          
        
        <p>Upload unofficial transcripts from any college other than Green River.</p>
        <button class="btn btn-default" type="button">Upload</button> <br> <br>
        
        <input type="checkbox" id="myCheck" required>
            I verify that the information submitted here is accurate and complete. <br>
        
        <!--carry variables over from tellusmore.php-->
        <input type="hidden" name="studentYesNo" value="<?php echo $_POST["studentYesNo"];?>.php"/>
        <input type="hidden" name="SID" value="<?php echo $_POST["SID"];?>.php"/>
        <input type="hidden" name="specialstat" value="<?php echo $_POST["specialstat"];?>.php"/>
        
        <!--carry variables over from contactinfo.php-->
        <input type="hidden" name="fname" value="<?php echo $_POST['fname'];?>.php"/>
        <input type="hidden" name="lname" value="<?php echo $_POST['lname'];?>.php"/>
        <input type="hidden" name="degreebtn" value="<?php echo $_POST['degreebtn'];?>.php"/>
        <input type="hidden" name="mail" value="<?php echo $_POST['mail'];?>.php"/>
        <input type="hidden" name="phone" value="<?php echo $_POST['phone'];?>.php"/>
        
        <!--carry varibles over from sdpre.php or netpre-->
        <input type="hidden" name="prereq" value="<?php echo $_POST['prereq'];?>.php"/>
        
        <input type="submit" id="submit" value="Finish" class="btn btn-success">
        </form>
        </div>
    
</body>
</html>
