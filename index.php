<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        
    </head>
    
    <body>
    <?php
    if (isset($_POST['loginForm'])){
        if(($_POST['username']) != "tin"){
            header("Location: user.php");
        }
        else{
            header("Location: admin.php");
        }
        
    }
 
    
    ?>
            <h1> Knight's Castle Games Login </h1>
            
            <form method="post">
                
                Username: <input type="text" name="username"/> <br />
                
                <input type="submit" name="loginForm" value="Login!"/>
                
            </form>
    </body>
</html>