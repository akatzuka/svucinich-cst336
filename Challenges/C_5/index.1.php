<?php
    include '../../dbConnection.php';
    $dbConn = getDatabaseConnection("c_5");
    
    session_start();
    
    if (!isset($_SESSION['randomNumber']) || isset($_GET['reset'])) 
    {
        $_SESSION['randomNumber'] = rand (1,10);
        $_SESSION['tries'] = 0;
    }
    
    if (isset($_GET['giveUp'])) 
    {
        echo "<h3> The number was: <br />";
        echo $_SESSION['randomNumber'] . "</h3>";
    }

    
    function compGuess($guess, $number)
    {
        global $rand_num;
        if ($guess == $number)
        {
            echo "<strong style='color:green'> Your guess is correct.</strong> <br />";;
            $_SESSION['number'][]=$number;
            $_SESSOON['toatlTries'][]=$_SESSION['tries'];
        }
        if ($guess > $number)
        {
            echo "<strong style='color:red'Your guess is too high.</strong> <br />";
        }
        if ($guess < $number)
        {
            echo "<strong style='color:red'Your guess is too low.</strong> <br />";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Challenge 5 </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <h1> Guess a Number </h1>
        
        <form>

            Guess: <input type="text" name="guess" size="6"/> <br /><br />
            
            <input type="submit" name="submitForm" value="Guess"/>
            <input type="submit" name="giveUp" value="Give Up"/>
            <input type="submit" name="reset" value="Play Again"/>
        </form>
            <?php 
                if (isset($_GET['submitForm'])) 
                {
                    echo "<br /><hr>Number of tries: " . ++$_SESSION['tries'] . "<br />";
                    compGuess( $_GET['guess'],$_SESSION['randomNumber']);
                    echo( $_SESSION['count'] ); 
                }
            ?>
            
            <hr>
            
            <?php
            if(isset($_SESSION['number']))
            {
                echo "<h3> Guess History </h3>";
                for($i = 0; $i < count($_SESSION['number']); $i++)
                {
                    echo "You guessed the number " . $_SESSION['number'][$i] . " in ". $_SESSION['totalTries'][$i] . " attempts <br />";
                }
            }
            ?>
    </body>
</html>