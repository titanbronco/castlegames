<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <a href="user.php">Home Page</a>
        <a href="set1.php">Set 1</a>
        <a href="logout.php">Log Out</a>
        
        <?php
        include 'functions.php';
        ?>
        
    </head>
    
    <body>
    <?php
    session_start();
    $user = displayUser();
    
    echo "<h1> Welcome "; 
    echo $user[0]['username']. " Coins: ". $user[0]['coins']. "</h1>";
    
    if (isset ($_GET['submit'])){
        if(($_GET['set1'])== "1 pack"){
            if($user[0]['coins'] < 5){
                echo "Sorry but you can't afford this! 5 coins.";
            }
            else{
                $_SESSION['amt'] = 1;
                $_SESSION['coins'] = $user[0]['coins'];
                $_SESSION['done'] = "no";
                deductCoins(5,$user[0]['coins']);
                $user[0]['coins'] -=5;
                header("Location: openSet1.php");
            }
        }
        else{
            if($user[0]['coins'] < 50){
                echo "Sorry but you can't afford this! 50 coins.";
            }
            else{
                $_SESSION['amt'] = 10;
                $_SESSION['coins'] = $user[0]['coins'];
                $_SESSION['done'] = "no";
                deductCoins(50,$user[0]['coins']);
                $user[0]['coins'] -=50;
                header("Location: openSet1.php");
            }
        }
    }
    
    if (isset ($_GET['submit1'])){
            if($user[0]['coins'] < 75){
                echo "Sorry but you can't afford this! 75 coins.";
            }
            else{
                $_SESSION['amt'] = 1;
                $_SESSION['coins'] = $user[0]['coins'];
                $_SESSION['done'] = "no";
                deductCoins(75,$user[0]['coins']);
                $user[0]['coins'] -=75;
                header("Location: openSet2.php");
            }

    }
 
    
    ?>
    <h2>
        Purchase Set 1! 5 Coins Per Pack
    </h2>
    <form method="get">
  <input list="set1" name="set1">
  <datalist id="set1">
    <option value="1 pack">
    <option value="1 box (10 packs)">
  </datalist>
  <input name ="submit" type="submit">
</form>
    <img src="images/set1/59.png"/>;
    <h2>Purchase Set 1 Expansion: Toon World! Includes 2 random promo cards and 5 Set 1 Packs!</h2>
    <form method="get">
  <input list="set2" name="set2">
  <datalist id="set2">
    <option value="1 Expansion(2 promos + 5 packs)">
  </datalist>
  <input name ="submit1" type="submit">
</form>
            <h1> Your Set 1 Cards </h1>
            
            <?php
            $set1 = displaySet1();
            echo "<table>
                  <tr>
                    <th>Card</th>
                    <th>Price in Coins</th>
                    <th>Amount Owned</th>
                  </tr>";
            for($i=0; $i< sizeof($set1); $i++){
                echo "<tr>";
                echo "<td>";
                echo $set1[$i]['cardname'];
                echo "</td>";
                echo "<td>";
                echo $set1[$i]['price'];
                echo "</td>";
                echo "<td>";
                echo $set1[$i]['amount'];
                echo "</td>";

            }
            
            ?>
        
    </body>
</html>