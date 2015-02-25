<?php
 //this starts the session
    session_start();
    ob_start();

     //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    //print_r($_POST);
   // print_r($_SESSION);
   // echo session_id();
    $errors = array();
   
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
    <?php 
    // Define variables and set to empty values;
    $fNameErr = $lNameErr = "";
    $emailErr = $phoneErr= "";
    $e = 0;
    
    // Serverside validation
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    foreach ($_POST as $key => $value) 
        { 
            $_SESSION[$key] = $value; 
        }
        
        if(empty($_POST["fname"])){
            $fNameErr = "First Name is required";
            $e = $e + 1;
             
        }
        else{
            echo " IN the first name" ;
            $_SESSION['firstName'] = $_POST['fname'];
        }
        
        if(empty($_POST["lname"])){
            $lNameErr = "Last Name is required";
            $e = $e + 1;
        }
        else{
            $_SESSION['lastName'] = $_POST['lname'];
        }
        
        if(empty($_POST["mail"])){
            $emailErr = "email is required";
            $e = $e + 1;
        }
        else{
            $_SESSION['email'] = $_POST['mail'];
        }
        
        $_SESSION['degreebtn'] = $_POST['degreebtn'];
    
        // If validation success, then redirect
        if($e === 0){
            header("Location:tellusmore.php");
            exit;
        }
    }   
    ?>
    <div class="container">
    <h2>Contact Info</h2>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <div class="form-group">
        <div class="container-fluid">
            
        <div class="col-xs-6">
            First Name: <span class="error">* <?php echo $fNameErr?></span>
            <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control">
                
            Last Name:  <span class="error">* <?php echo $lNameErr;?></span>
            <input type="text" name="lname" placeholder="Last Name" class="form-control">
                
        </div>
        
        <div class="col-xs-6">
            Email:
            (If Green River Student, use student email):<span class="error">* <?php echo $emailErr;?></span><br>
            <input type="email" name="mail" placeholder="Email" required class="form-control">
        
        
             Contact Number (xxx-xxx-xxxx):<span class="error">* <?php echo $phoneErr;?></span><br>
            <input type="tel"  pattern="^\d{3}\d{3}\d{4}$" name="phone" placeholder="Phone Number" class="form-control">
        </div>
                
        </div>
        <br>
        <div class="container-fluid">
            <div class="col-xs-6">
                <div id="content">
                
                    What type of degree are you interested in? <br>
                    
                    <div class="radio">
                        <label><input type="radio" name ="degreebtn"  id="degreebtn" value="sdpre" >Software Development</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name ="degreebtn" value="netpre">Networking & Security</label>
                    </div>    
                    <div class="radio">
                        <label><input type="radio" name ="degreebtn" value="undecided">Undecided</label>
                    </div> 
                    
                </div>
            </div>
        </div>
    </div>
    
    

    <div class="container-fluid">
        <div class="col-xs-6">
            <input type="submit" name="submit" value="Continue" class="btn btn-primary">
        </div>
    </div>
</form>
    </div>

</div>
</body>