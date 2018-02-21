<!DOCTYPE html>
<html>
    <head>
        <title> HW 2: Dice Game </title>
        <meta charset="utf-8" />
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id="main">
    
        <?php
        
        $p1 = [];
        $p2 = [];
        for($i = 0; $i < 3; $i++)
        {
            array_push($p1, rand(1,6));
        }
        for($i = 0; $i < 3; $i++)
        {
            array_push($p2, rand(1,6));
        }
        
        $points1 = array_sum($p1);
        $points2 = array_sum($p2);
        
        echo    "<div id='player1'>";
        echo    "<h2 class=color-1> Your dice:</h3>";
        echo    "<img src='img/$p1[0].png' alt='Dice #1'> <img src='img/$p1[1].png' alt='Dice #2'> <img src='img/$p1[2].png' alt='Dice #3'>";
        echo    "<h4 class=color-2> Points: $points1 </h4>";
        echo    "</div>";
           
        echo    "<div id='player2'>";
        echo    "<h2 class=color-1> Computer's dice:</h3>";
        echo    "<img src='img/$p2[0].png' alt='Dice #1'> <img src='img/$p2[1].png' alt='Dice #2'> <img  src='img/$p2[2].png' alt='Dice #3'>";
        echo    "<h4 class=color-2> Points: $points2 </h4>";
        echo    "</div>";
        
        echo "<div id = 'output'>";
                
                if ($points1 > $points2)
                {
                    echo "<h2>You won!</h2>";
                }
                elseif ($points1 < $points2)
                {
                    echo "<h2>You lose!</h2>";
                }
                elseif ($points1 == $points2)
                {
                    echo "<h2>Tie, you both lose!</h2>";
                }
                
        echo "</div>";        
        
        
        ?>
        
            <form>
                    <input type="submit" value="Roll!"/>
            </form>

        </div>
    </body>
</html>