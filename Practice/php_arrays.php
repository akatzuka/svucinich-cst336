<?php

 $cards = array("ace","one", 2);
 //print_r($cards);   //for debug purposes

 //echo $cards[1];

 $cards [] = "jack";    //adds element to the end of the array
 array_push($cards, "queen", "king");

 $cards[2] = "ten";     //overwrites given index
 
 print_r($cards);
 
 displayCard($cards[3]);
 
  shuffle($cards);
 echo "<hr>";
 print_r($cards);
  echo "<hr>";
 $randomIndex = rand(0,count($cards)-1); //getting a random index
 displayCard($cards[$randomIndex]);
 echo "<hr>";
 $randomIndex = array_rand($cards); //getting a random index too
 displayCard($cards[$randomIndex]);
 
 function displayCard($symbol) {
     global $card   // makes variable global
     
    echo "<img src='../Challenges/C_2/img/cards/clubs/$symbol.png' ";
 }
 
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>