<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <a href="user.php">Home Page</a>
        <a href="set1.php">Set 1</a>
        <a href="set3.php">Set 2</a>
        <a href="logout.php">Log Out</a>
        
        <?php
        session_start();
        include 'functions.php';
        
        $amt = $_SESSION['amt'];
        $coins = $_SESSION['coins'];
        //echo $amt;
        
        if($_SESSION['done']=="yes"){
            echo "<h1> Thanks for shopping! </h1>";
            session_destroy();
            header("Location: set3.php");
        }
        else{
            
        openSet4();
        }
        ?>
        
    </head>
    
    
</html>