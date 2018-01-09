<?php

function openSet1(){
    
    $host = "us-cdbr-iron-east-05.cleardb.net";
     $username = "b8507d35f027f0";
     $password = "ebc8d031";
    $dbname="heroku_7f04ff4b9d6c0d0";
// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $sql = "SELECT distinct* FROM cardpool WHERE setname=1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($records);
    
    
    $r = rand(0,19);
    $amount = $records[$r]['amount'];
    $amount+=1;
   // echo $amount;
    $records[$r]['amount']=$amount;
    //echo $card[$r]['amount'];
    echo "<table>";
    echo "<tr>";
   // echo "<th>";
   // echo $pack['card2'];
   // echo "</th>";
    echo "<tr>";
    echo "<td>";
    echo "<img src='images/set1/$r.png'>";
    echo "</td>";
    
    $name = $records[$r]['cardname'];
    $sql = "UPDATE cardpool SET amount = $amount WHERE cardname='$name'";
   // echo $sql;
   // echo $name;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
    $pack = array("card1","card2");
    $pack['card1'] = $records[$r]['name'];
    
    $r = rand(1,100);
    if($r >0 && $r< 65){
        $r = rand(20,37);
    }
    else if($r>=65 && $r<85){
        $r = rand(38,49);
    }
    else if($r>=85 && $r<99){
        $r = rand(50,57);
    }
    else if($r>=99 && $r<101){
        $r = rand(58,59);
    }
    
   $amount = $records[$r]['amount'];
    $amount+=1;
   // echo $amount;
    $records[$r]['amount']=$amount;
    $records[$r]['amount']=$card[$r]['amount'];
    //echo $card[$r]['amount'];
    //echo "<th>";
   // echo $pack['card2'];
   // echo "</th>";
    //echo "<tr>";
    echo "<td>";
    echo "<img src='images/set1/$r.png'>";
    echo "</td>";
    echo "</table>";
    
     $name = $records[$r]['cardname'];
    $sql = "UPDATE cardpool SET amount = $amount WHERE cardname='$name'";
    //echo $sql;
   // echo $name;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
    $pack['card2'] = $records[$r]['name'];
    
    
    //print_r($card);
    
    
    return $pack;
    
    
}

function openSet2(){
    
    $host = "us-cdbr-iron-east-05.cleardb.net";
     $username = "b8507d35f027f0";
     $password = "ebc8d031";
    $dbname="heroku_7f04ff4b9d6c0d0";
// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $sql = "SELECT distinct* FROM cardpool WHERE setname=2";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($records);
    
    
    $r = rand(0,7);
    $amount = $records[$r]['amount'];
    $amount+=1;
   // echo $amount;
    $records[$r]['amount']=$amount;
    //echo $card[$r]['amount'];
    echo "<table>";
    echo "<tr>";
   // echo "<th>";
   // echo $pack['card2'];
   // echo "</th>";
    echo "<tr>";
    echo "<td>";
    echo "<img src='images/set2/$r.png'>";
    echo "</td>";
    
    $name = $records[$r]['cardname'];
    $sql = "UPDATE cardpool SET amount = $amount WHERE cardname='$name'";
   // echo $sql;
   // echo $name;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
    $pack = array("card1","card2");
    $pack['card1'] = $records[$r]['name'];
    
    $r = rand(0,7);
    
   $amount = $records[$r]['amount'];
    $amount+=1;
   // echo $amount;
    $records[$r]['amount']=$amount;
    $records[$r]['amount']=$card[$r]['amount'];
    //echo $card[$r]['amount'];
    //echo "<th>";
   // echo $pack['card2'];
   // echo "</th>";
    //echo "<tr>";
    echo "<td>";
    echo "<img src='images/set2/$r.png'>";
    echo "</td>";
    echo "</table>";
    
     $name = $records[$r]['cardname'];
    $sql = "UPDATE cardpool SET amount = $amount WHERE cardname='$name'";
    //echo $sql;
   // echo $name;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
    $pack['card2'] = $records[$r]['name'];
    
    
    //print_r($card);
    
    for($i=0;$i<5;$i++){
        openSet1();
    }
    
    
    return $pack;
    
    
}

function openSet3(){
    
    $host = "us-cdbr-iron-east-05.cleardb.net";
     $username = "b8507d35f027f0";
     $password = "ebc8d031";
    $dbname="heroku_7f04ff4b9d6c0d0";
// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $sql = "SELECT distinct* FROM cardpool WHERE setname=3";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($records);
    
    
    $r = rand(0,10);
    $amount = $records[$r]['amount'];
    $amount+=1;
   // echo $amount;
    $records[$r]['amount']=$amount;
    //echo $card[$r]['amount'];
    echo "<table>";
    echo "<tr>";
   // echo "<th>";
   // echo $pack['card2'];
   // echo "</th>";
    echo "<tr>";
    echo "<td>";
    echo "<img src='images/set3/$r.png'>";
    echo "</td>";
    
    $name = $records[$r]['cardname'];
    $sql = "UPDATE cardpool SET amount = $amount WHERE cardname='$name'";
    echo $sql;
   // echo $name;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
    $pack = array("card1","card2");
    $pack['card1'] = $records[$r]['name'];
    
    $r = rand(1,100);
    if($r >0 && $r< 65){
        $r = rand(11,25);
    }
    else if($r>=65 && $r<85){
        $r = rand(26,39);
    }
    else if($r>=85 && $r<99){
        $r = rand(40,47);
    }
    else if($r>=99 && $r<101){
        $r = rand(48,49);
    }
    
   $amount = $records[$r]['amount'];
    $amount+=1;
   // echo $amount;
    $records[$r]['amount']=$amount;
    $records[$r]['amount']=$card[$r]['amount'];
    //echo $card[$r]['amount'];
    //echo "<th>";
   // echo $pack['card2'];
   // echo "</th>";
    //echo "<tr>";
    echo "<td>";
    echo "<img src='images/set3/$r.png'>";
    echo "</td>";
    echo "</table>";
    
     $name = $records[$r]['cardname'];
    $sql = "UPDATE cardpool SET amount = $amount WHERE cardname='$name'";
    //echo $sql;
   // echo $name;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
    $pack['card2'] = $records[$r]['name'];
    
    
    //print_r($card);
    
    
    return $pack;
    
    
}

function changeCard($id, $amt, $price){
    $host = "us-cdbr-iron-east-05.cleardb.net";
     $username = "b8507d35f027f0";
     $password = "ebc8d031";
    $dbname="heroku_7f04ff4b9d6c0d0";
// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = "SELECT distinct* FROM cardpool";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
    $amount = $records[$id]['amount'];
    $amount+=$amt;
    $records[$id]['amount']=$amount;
    
    $name = $records[$id]['cardname'];
    if($price ==0){
    $sql = "UPDATE cardpool SET amount = $amount WHERE cardname='$name'";
    }
    else{
        $sql = "UPDATE cardpool SET amount = $amount, price = $price WHERE cardname='$name'";
    }
    echo $sql;
    echo $name;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
   // echo "Success!";
    
    
    
}

function displaySet1($set){
    $host = "us-cdbr-iron-east-05.cleardb.net";
     $username = "b8507d35f027f0";
     $password = "ebc8d031";
    $dbname="heroku_7f04ff4b9d6c0d0";
// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    if($set==1){
        $sql = "SELECT distinct* FROM cardpool WHERE setname=1 OR setname=2";
    }
    else if($set==3){
        $sql = "SELECT distinct* FROM cardpool WHERE setname=3";
    }
    
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($records);
        
        return $records;
    
}


function seedBase(){
    //$user = array("username","coins");
    $host = "us-cdbr-iron-east-05.cleardb.net";
     $username = "b8507d35f027f0";
     $password = "ebc8d031";
    $dbname="heroku_7f04ff4b9d6c0d0";
// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $counter=0;
    
    $user = array(array("name","price","amount"));
    $myfile = fopen("set3.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)){
        $line = fgets($myfile);
        $disUser = explode(',',$line);
        $user[$counter]['name']=$disUser[0];
        $user[$counter]['price']=$disUser[1];
        $user[$counter]['amount']=$disUser[2];
        $counter++;
    }
    fclose($myfile);
    
    //print_r($user);
    
    for($i=0; $i<sizeof($user); $i++){
        $name = $user[$i]['name'];
        $price = $user[$i]['price'];
        $amount = $user[$i]['amount'];
        $sql = "INSERT into cardpool (cardname,price,amount,setname) VALUES ('$name', $price,$amount,3)";
        //echo $user[$i]['name'];
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //echo $sql;
    }
    
   // return $user;
}


function displayUser(){
    $user = array("username","coins");
    $host = "us-cdbr-iron-east-05.cleardb.net";
     $username = "b8507d35f027f0";
     $password = "ebc8d031";
    $dbname="heroku_7f04ff4b9d6c0d0";
// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $sql = "SELECT distinct* FROM castleuser";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($records);
        
        return $records;
    
}

/*
function deductCoins($amt){
    $user = array("username","coins");
    $myfile = fopen("user.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)){
        $line = fgets($myfile);
        $disUser = explode(',',$line);
        $user['username']=$disUser[0];
        $user['coins']=$disUser[1];
    }
    fclose($myfile);
    
    $myfile = fopen("user.txt", "w") or die("Unable to open file!");
    $user['coins']-=$amt;
    $txt=$user['username'].",".$user['coins'];
    fwrite($myfile, $txt);
    
    
    
    
}
*/
function deductCoins($amt,$oldtotal){
    $host = "us-cdbr-iron-east-05.cleardb.net";
     $username = "b8507d35f027f0";
     $password = "ebc8d031";
    $dbname="heroku_7f04ff4b9d6c0d0";
// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $amt = $oldtotal - $amt;
    
    $sql = "UPDATE castleuser SET coins= $amt WHERE username= 'miguel'";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    
    echo"Record has been updated!";
}

function deductCoinsAdmin($amt){
    $host = "us-cdbr-iron-east-05.cleardb.net";
     $username = "b8507d35f027f0";
     $password = "ebc8d031";
    $dbname="heroku_7f04ff4b9d6c0d0";
// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $sql = "UPDATE castleuser SET coins= $amt WHERE username= 'miguel'";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    
    echo"Record has been updated!";
}

?>