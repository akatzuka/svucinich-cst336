<?php
            function dispSym($randomValue, $pos)
            {
                switch ($randomValue)  {
                    case 0: $symbol = "seven";
                            break;
                    case 1: $symbol = "bar";
                            break;
                    case 2: $symbol = "orange";
                            break;
                    case 3: $symbol = "grapes";
                            break;
                    case 4: $symbol = "cherry";
                            break;
                    case 5: $symbol = "lemon";
                            break;
                }
                
                echo "<img id='reel$pos' src= 'img/$symbol.png' width = '70' alt = '$symbol' title = '$symbol' />";
            }


            function disPoints($randomValue1,$randomValue2,$randomValue3)
            {
                echo "<div id = 'output'>";
                if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3)
                {
                    switch($randomValue1)
                    {
                        case 0: $totalPoints = 10000;
                            echo "<h1>Jackpot!</h1>";
                            break;
                        case 1: $totalPoints = 1000;
                            break;
                        case 2: $totalPoints = 750;
                            break;
                        case 3: $totalPoints = 500;
                            break;
                        case 4: $totalPoints = 250;
                            break;
                        case 5: $totalPoints = 100;
                            break;
                    }
                    echo "<h2>You won $totalPoints points!</h2>";
                }
                else
                {
                    echo "<h3> Try Again! </h3>";    
                }
                echo "</div>";
            }
            function play()
            {
                for ($i = 1; $i < 4; $i++)
                {
                    ${"randomValue" . $i } = rand(0,5);
                    dispSym(${"randomValue" . $i } , $i);
                }
            
                disPoints($randomValue1, $randomValue2, $randomValue3);
            }

?>