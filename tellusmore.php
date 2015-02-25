<?php
    session_start();
    print_r($_POST);
    //print_r($_SESSION);
    $Chosen = $_SESSION['degreebtn'];
    
     //print_r($_SESSION);
     //echo session_id();
     //$_SESSION['student'] = $_POST['studentYesNo'] ;
     //$_SESSION['sid'] = $_POST['SID'] ;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css.css">
        <style>.error{color: #ff0000;}</style>
      
     
</head>
<body>
<!--this is a jumbotron and will hold each pages content-->
    <div id="main-div">
        <div class="container">
            <h2>Tell us More</h2>

        <form method="post" action="<?php echo $Chosen. ".php"; ?>" id="studentForm" onsubmit="checkSID();">
            <fieldset>
                <legend>Please Select One:</legend>
                <label class="radio-inline">
                    <input type="radio" name="studentYesNo" value ="yes" id="YesStu" required>I am currently a student at Greenriver<br>
                </label>
                    <div id="hideSID">
                        <label id="SID">Student ID (xxxxxxxxx):<input type="text" pattern="^\d{3}\d{3}\d{3}$" name="SID">
                            <span class="error">* <?php echo $lNameErr;?></span>
                        </label>
                        
                    </div>
                <label class="radio-inline">
                    <input type="radio" name="studentYesNo" value ="no" id="NoStu"required>I am a new stuent.
                </label>
            </fieldset>
            <div class="checkbox">
            <fieldset>
                <legend>I am a (please check all that apply):</legend>
                <label><input type="checkbox" name="veteran" value="veteran">Veteran<br></label>
                <label><input type="checkbox" name="international" value="international">International Student<br></label>
                <label><input type="checkbox" name="runningStart" value="runningStart">Running Start Student</label>
            </fieldset>
            </div>
            <input type="submit" id="submit" value="Continue" class="btn btn-primary">
        </form>
        </div>
    </div>

    <script>
        var IDnum = document.getElementById("SID");
        var StuYes = document.getElementById("YesStu");
        var StuNo = document.getElementById("NoStu");

        StuYes.onclick = toggleDisplayOn;
        StuNo.onclick = toggleDisplayOff;
        
        window.onload = toggleDisplayOff;
        
        function toggleDisplayOn(){
            IDnum.style.display = "block";
        }

        function toggleDisplayOff(){
            IDnum.style.display = "none";
        }
    </script>
</body>