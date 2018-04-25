<!DOCTYPE html>
<html>
    <head>
        <title> HW 4: Dice Game - Revist </title>
        <meta charset="utf-8" />
        
        <link  href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>
        <div id="main">
        
            <div id="player1">
                <h2 class=color-1> Your dice: </h3>
                <img src="img/0.png"id="p1-dice-1">
                <img src="img/0.png"id="p1-dice-2">
                <img src="img/0.png"id="p1-dice-3">
            </div>
            
            <div id="p1-points">
                <h4 class=color-2> Points: 
            </div>
            
            <div id="player2">
                <h2 class=color-1> Computer's dice: </h3>
                <img src="img/0.png"id="p2-dice-1">
                <img src="img/0.png"id="p2-dice-2">
                <img src="img/0.png"id="p2-dice-3">
            </div>
                      
            <div id="p2-points">
                <h4 class=color-2> Points: 
            </div>
            
            <div id="outcome"></div>
            
            <script src= "javascript.js"></script>
        
        </div>
    </body>
</html>