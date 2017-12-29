<?php

function openSet1(){
    $card = array(array("name","price","amount"));
    $counter = 0;
    $myfile = fopen("set1.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
      $line = fgets($myfile);
      $disCard = explode(',',$line);
      $card[$counter]['name'] = $disCard[0];
      $card[$counter]['price'] = $disCard[1];
      $card[$counter]['amount'] = $disCard[2];
      $counter++;
    }
    fclose($myfile);
    
    $r = rand(0,19);
    $amount = $card[$r]['amount'];
    $amount+=1;
    echo $amount;
    $card[$r]['amount']=$amount;
    $card[$r]['amount']=(string) $card[$r]['amount'];
    echo $card[$r]['amount'];
    
    $pack = array("card1","card2");
    $pack['card1'] = $card[$r]['name'];
    
    $r = rand(1,100);
    if($r >0 && $r< 70){
        $r = rand(20,37);
    }
    else if($r>=70 && $r<89){
        $r = rand(38,49);
    }
    else if($r>=89 && $r<99){
        $r = rand(50,57);
    }
    else if($r>=99 && $r<101){
        $r = rand(58,59);
    }
    
    $amount = $card[$r]['amount'];
    $amount+=1;
    echo $amount;
    $card[$r]['amount']=$amount;
    $card[$r]['amount']=(string) $card[$r]['amount'];
    echo $card[$r]['amount'];
    
    $pack['card2'] = $card[$r]['name'];
    
    $myfile = fopen("set1.txt", "w") or die("Unable to open file!");
    for($i =0; $i<sizeof($card); $i++){
        if($card[$i]['name']== $pack['card1'] || $card[$i]['name']== $pack['card2']){
            $txt = $card[$i]['name'].",".$card[$i]['price'].",".$card[$i]['amount']."\n";
        }
        else{
            $txt = $card[$i]['name'].",".$card[$i]['price'].",".$card[$i]['amount']."";
        }
        fwrite($myfile, $txt);
    }
    fclose($myfile);
    
    //print_r($card);
    
    
    return $pack;
    
    
}

function displaySet1(){
    $card = array(array("name","price","amount"));
    $counter = 0;
    $myfile = fopen("set1.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
      $line = fgets($myfile);
      $disCard = explode(',',$line);
      $card[$counter]['name'] = $disCard[0];
      $card[$counter]['price'] = $disCard[1];
      $card[$counter]['amount'] = $disCard[2];
      $counter++;
    }
    fclose($myfile);
    //print_r($card);
    
    return $card;
    
}

function displayUser(){
    $user = array("username","coins");
    $myfile = fopen("user.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)){
        $line = fgets($myfile);
        $disUser = explode(',',$line);
        $user['username']=$disUser[0];
        $user['coins']=$disUser[1];
    }
    fclose($myfile);
    
    return $user;
}

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

?>