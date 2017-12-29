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
            
        if($amt > 1){
            for($i = 0; $i <10; $i ++){
                $pack = openSet1();
                echo $pack['card1'];
                echo "<br>";
                echo $pack['card2'];
                echo "<br>";
                $coins-=5;
                echo $coins;
            }
            $_SESSION['done'] = "yes";
        }
        else{
             $pack = openSet1();
                echo $pack['card1'];
                echo "<br>";
                echo $pack['card2'];
                echo "<br>";
                $coins-=5;
                echo $coins;
                $_SESSION['done'] = "yes";
        }
        }
        ?>
        
    </head>
    
    
</html>