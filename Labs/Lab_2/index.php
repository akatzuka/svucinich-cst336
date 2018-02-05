<!DOCTYPE html>
<html>
    <head>
        <title> Lab 2: 777 Slot Machine </title>
        <meta charset="utf-8" />
    </head>
    <body>

        <?php
            
            function dispSym($randomValue)
            {
                //$randomValue = rand(0,2);

                // if ($randomValue == 0)
                // {
                //     $symbol = "seven";
                // }
                // elseif ($randomValue == 1)
                // {
                //     $symbol = "orange";
                // }
                // elseif ($randomValue == 2)
                // {
                //     $symbol = "lemon";
                // }
                // else 
                // {
                //     $symbol = "cherry";
                // }
                switch ($randomValue)  {
                    case 0: $symbol = "seven";
                            break;
                    case 1: $symbol = "orange";
                            break;
                    case 2: $symbol = "cherry";
                            break;
                }
            // function dispPoints($randomValue1,$randomValue2,$randomValue3)
            // {
            //     if ()
            // }
                
                
                
                echo "<img src= 'img/$symbol.png' width = '70' alt = '$symbol' title = '$symbol' />";
            }
            
            $randomValue1 = rand(0,2);
            dispSym($randomValue1);
            $randomValue2 = rand(0,2);
            dispSym($randomValue2);
            $randomValue3 = rand(0,2);
            dispSym($randomValue3);
            
            echo "<br /> <hr> Values: $randomValue1 $randomValue2 $randomValue3";
            
            
            // for ($i=0; $i < 3 $i++)
            // {
            //        dispSym();
            // }
        ?>
<!--
        <img src= "img/cherry.png" width = "70" alt = "Cherry" title = "Cherry"/>
        <img src= "img/lemon.png" width = "70" alt = "Lemon" title = "Lemon"/>
        <img src= "img/orange.png" width = "70" alt = "Orange" title = "Orange"/>
-->

    </body>
</html>