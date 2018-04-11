<?php
    session_start();
    
    if ( !isset( $_SESSION['count'] ) ) 
     $_SESSION['count'] = 1; else $_SESSION['count']++;
     
    static $rand_num = $num(rand(1,10));
    function getNum()
    {
            global $rand_num;
            echo $rand_num;
    }
    
    function compGuess()
    {
        global $rand_num;
        if ($_POST['guess'] == $rand_num)
        {
            echo "Your guess is correct.";
            
        }
        if ($_POST['guess'] > $rand_num)
        {
            echo "Your guess is too high.";
        }
        if ($_POST['guess'] < $rand_num)
        {
            echo "Your guess is too low.";
        }
    }
    
    function sesRestart()
    {
        global $rand_num;
        if(isset($_POST['submitForm']))
        {
            compGuess();
            return;
        }
        if(isset($_POST['submitForm2']))
        {
            getNum();
            return;
        }
        if(isset($_POST['submitForm3']))
        {
            session_destroy();
            unset($rand_num);
            getNum();
            session_start();
            return;
        }
        else
        {
            compGuess();
            return;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Challenge 5 </title>
    </head>
    <body>

        <h1> Guess a Number </h1>
        <?php getNum();?>
        
        <form method="POST">

            Guess: <input type="text" name="guess"/> <br />
            
            <input type="submit" name="submitForm" value="Submit"/>
            <input type="submit" name="submitFor2" value="Give Up"/>
            <input type="submit" name="submitForm3" value="Play Again"/>
            <?php sesRestart();?>
        </form>
            <?php echo( $_SESSION['count'] ); ?>
    </body>
</html>