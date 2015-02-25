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
    <title>Email Confirmation</title>
    
    <head>
    <title>Session/PHP/Validation Testing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     <style>.error{color: #ff0000;}</style>
</head>
</head>

<body>

<h1><center>EMAIL CONFIRMATION</center></h1>
<div>
<p>
    
    
    Thank you for your application to Green River's BAS program.
    An advisor will contact you within 2 business days. <br>
    
    In the meantime, please visit check us out on…<br>
    [Social networking icons]<br>
</p>

<p>
<b>New students only:</b><br>

Please continue for information on next steps.<br>


Include a blurb about financial aid and scholarships.<br>

<center>
    <a href="steps.php">
    <button type="button"> Next Steps
    </button>
</center>
</p>
</div>
<h2>Database</h2>
    <?php
        $firstName = $_SESSION["fname"];
        $lastName = $_SESSION["lname"];
        $email = $_SESSION["email"];
        $phone = $_SESSION["phone"];
        $degree = $_SESSION["degreebtn"];
        $sid = $_SESSION["sid"];
        $student = $_SESSION["student"];
        //Connect to the database
        require 'db.php';
        try {
            $dbh = new PDO("mysql:host=$hostname;
                           dbname=amaninde_grcc", $username, $password);
            //echo "Connected to database.";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        // Write to db
        $sql = "INSERT INTO `amaninde_grcc`.`bas` (`fname`, `lname`, `email`, `phone`, `degree`,`sid`, `student`, `time`)
        VALUES ('$firstName', '$lastName', '$email', '$phone', '$degree', '$sid', '$student',CURRENT_TIMESTAMP)";
        $statement = $dbh->prepare($sql);
        $statement->execute();
    ?>
    <table class="table">
        <tr>
            <th>First Name </th>
            <th>Last Name </th>
            <th>Email </th>
            <th>Phone</th>
            <th>Degree</th>
            <th>Student ID</th>
            <th>Student Yes or No</th>
            <th>Where Met</th>
            <th>Notes</th>
        </tr>
    <?php            
        // Get Data from DB
        $sql = "SELECT * FROM `bas` ORDER BY time desc";
        $result = $dbh->query($sql);
        foreach($result as $row){
            echo "<tr>
                    <td>{$row['fname']}</td>
                    <td>{$row['lname']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['degree']}</td>
                    <td>{$row['sid']}</td>
                    <td>{$row['student']}</td>
                  </tr>";
        }
    ?>
</body>
</html>
