<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <a href="user.php">Home Page</a>
        <a href="set1.php">Set 1</a>
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
            header("Location: set1.php");
        }
        else{
            
        openSet2();
        }
        ?>
        
    </head>
    
    
</html>