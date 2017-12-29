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
    if (isset($_POST['loginForm'])){
        if(($_POST['username']) != "tin"){
            header("Location: user.php");
        }
        
    }
    
    $user = displayUser();
    
    echo "<h1> Welcome "; 
    echo $user['username']. " Coins: ". $user['coins']. "</h1>";
    
    ?>
            <h1> Latest News </h1>
            
            <h3> If you are reading this then you have been accepted into Knight's Castle Games private Alpha!
            Whether or not you managed to snag a paid Alpha position or not we hope that you will take testing seriously and help us push through what can be the hardest
            time for a project like this. We greatly appreciate all feedback on the cards, websites and overall atmosphere as the project as we slowly begin
            our attempt to stand on our feet. We also owe a huge shoutout and thank you to the user, Kiko Kid for donating $1000 so that this project could see
            the light of day! Thank you and stay posted for updates!</h3>
    </body>
</html>