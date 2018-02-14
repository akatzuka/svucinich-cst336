<?php

    function getRandomSuit() {
        $val = rand(0,3);
        switch ($val)  {
            case 0: $symbol = "clubs";
                    return $symbol;
            case 1: $symbol = "diamonds";
                    return $symbol;
            case 2: $symbol = "hearts";
                    return $symbol;
            case 3: $symbol = "spades";
                    return $symbol;
        }        

    }
    function getRandomCard() {
        $val = rand(0,4);
        switch ($val)  {
            case 0: $symbol = "ace";
                    return $symbol;
            case 1: $symbol = "king";
                    return $symbol;
            case 2: $symbol = "queen";
                    return $symbol;
            case 3: $symbol = "jack";
                    return $symbol;
            case 4: $symbol = "ten";
                    return $symbol;        
        }        

    }
    
    function getPoints($card) {
        if($card == "ace"){
            return 5;
        }
        if($card == "king"){
            return 4;
        }
        if($card == "queen"){
            return 3;
        }
        if($card == "jack"){
            return 2;
        }
        if($card == "ten"){
            return 1;
        }
    }



?>

<!DOCTYPE html>
<html>
    <head>
        <title> Challenge Activity 2: Card Game </title>
        <meta charset="utf-8" />
        <style>
            
            body, h1
            {
                text-align: center;
                color:green;
                font-family: Montserrat;
            }
            
            
            
            
            
            
            
        </style>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
        <header>
            <h1> Challenge Activity 2: Card Game </h1>
        </header>
    </head>
    <body>

        <?php
            $suit = getRandomSuit();
            $card = getRandomCard();
            $val1 = getPoints($card);
            
            echo "<img src= 'img/cards/$suit/$card.png' width = '70' alt = '$card' title = '$card' />";
            
            $suit = getRandomSuit();
            $card = getRandomCard();
            $val2 = getPoints($card);
            
            echo "<img src= 'img/cards/$suit/$card.png' width = '70' alt = '$card' title = '$card' />";
            
            
            echo "<br /> <hr> Values: $val1 $val2";
            
            if($val1 > $val2)
            {
                echo "<br /> <hr> Player 1 wins";
            }
            
            if($val1 < $val2)
            {
                echo "<br /> <hr> Player 2 wins";
            }
            
            if($val1 == $val2)
            {
                echo "<br /> <hr> Tie, nobody wins";
            }
            
        ?>

    </body>
</html>