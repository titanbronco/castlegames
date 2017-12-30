<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <a href="user.php">Home Page</a>
        <a href="set1.php">Set 1</a>
        
    </head>
    
    <body>
    <?php
    include 'functions.php';
    
    //seedBase();
    
    if(isset($_GET['submit1'])){
        $amt = $_GET['amount'];
        $cardid = $_GET['cardid'];
        $price = $_GET['price'];
        changeCard($cardid,$amt,$price);
        echo "Success!";
    }
    if(isset($_GET['submit2'])){
        $amt = $_GET['coinz'];
        deductCoinsAdmin($amt);
        echo "Success!";
    }
    
    ?>
    <form>
        Card ID:<br>
  <input type="text" name="cardid"><br>
  Amount(+/-):<br>
  <input type="text" name="amount"><br>
  New Price:<br>
  <input type="text" name="price" value=0><br><br>
  <input type="submit" name = "submit1" value="Submit">
    </form>
    <form>
        <input type="text" name="coinz">
        <input type="submit" name = "submit2" value="Submit">
    </form>
    </body>
</html>