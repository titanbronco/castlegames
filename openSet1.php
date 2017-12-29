<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <a href="user.php">Home Page</a>
        <a href="set1.php">Set 1</a>
        
        <?php
        session_start();
        include 'functions.php';
        
        $amt = $_SESSION['amt'];
        //echo $amt;
        
        if($amt > 1){
            for($i = 0; $i <10; $i ++){
                $pack = openSet1();
                echo $pack['card1'];
                echo "<br>";
                echo $pack['card2'];
                echo "<br>";
            }
        }
        else{
             $pack = openSet1();
                echo $pack['card1'];
                echo "<br>";
                echo $pack['card2'];
                echo "<br>";
        }
        ?>
        
    </head>
    
    
</html>