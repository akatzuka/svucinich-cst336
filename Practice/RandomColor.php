<?
    function getRandCol()
    {
        $red = rand(0,255);
        $green = rand(0,255);
        $blue = rand(0,255);
        $alpha = rand(0, getrandmax() - 1) / mgetrandmax();
        echo "background-color:rgba($red, $green, $blue, $alpha);";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Random Color </title>
        
        <style>
            
            
            
            body {
                color:
                <?=
                    getRandCol();
                ?>
            }
            
            
            
        </style>
    </head>
    <body>
        <h1> Welcome! </h1>
        
        <h2> Random Background Colour </h2>

        
        
    </body>
</html>