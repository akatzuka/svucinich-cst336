<?php

    include 'functions.php';
    
    if (isset($_GET['submit']))
    {
        $_SESSION['answerOne'] = $_GET['answerOne'];
        $_SESSION['answerFive'] = $_GET['answerFive'];
    }
    
    $answerOne = $_SESSION['answerOne'];
    $answerFive = $_SESSION['answerFive'];    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Homework 3 </title>
        <meta charset="utf-8" />
        
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <form method="get" action="">
            
            <fieldset>
                <legend> Question 1 </legend>
                <p> What does HTML stand for? </p>
                <input type="text" name="answerOne" value="<?php echo $answerOne; ?>" />
            </fieldset>
            
            <fieldset>
                <legend> Question 2 </legend>
                <p> What command do you use to push to GitHub? </p>
                <select name="category_1">
                    <option value=""> * Select One * </option>
                    <option <?=AnswerTwo('Pull')?> > Pull </option>
                    <option <?=AnswerTwo('Commit')?> > Commit </option>
                    <option <?=AnswerTwo('Push')?> > Push </option>                    
                </select>
            </fieldset>
            
            <fieldset>
                <legend> Question 3 </legend>
                <p> Variables in PHP begin with which symbol? </p>
                <div class="button_size">
                    
                    <input type="checkbox" id="answer1" name="answer" value="!" <?= ($_GET['answer']=='!')?"checked":"" ?> >
                    <label for="answer1"> ! </label> <br />
                    
                    <input type="checkbox" id="answer2" name="answer" value="@" <?= ($_GET['answer']=='@')?"checked":"" ?> >
                    <label for="answer2"> @ </label> <br />
                    
                    <input type="checkbox" id="answer3" name="answer" value="$" <?= ($_GET['answer']=='$')?"checked":"" ?> >
                    <label for="answer3"> $ </label> <br />
                    
                </select>
                </div> <br />
            </fieldset>
            
            <fieldset>
                <legend> Question 4 </legend>
                <p> What does PHP stand for? </p>
                <select name="category_2">
                    <option value=""> * Select One * </option>
                    <option <?=AnswerFour('Personal Hypertext Processor')?> > Personal Hypertext Processor </option>
                    <option <?=AnswerFour('PHP: Hypertext Processor')?> > PHP: Hypertext Processor </option>
                    <option <?=AnswerFour('Private Home Page')?> > Private Home Page </option>                    
                </select>
            </fieldset>
            
            <fieldset>
                <legend> Question 5 </legend>
                <p> What does SQL stand for? </p>
                <input type="text" name="answerFive" value="<?php echo $answerFive; ?>" />
            </fieldset>
            
            <input class="submit" type="submit" name="submit" value="Submit!" />
            
        </form>

        <br/><br/>
        
        <?php
        
            if(isset($_GET['submit']))
            {
                if(!empty($_GET['answerOne']))
                {
                    if(!empty($_GET['category_1']))
                    {
                        if(!empty($_GET['answer']))
                        {
                            if(!empty($_GET['category_2']))
                            {
                                if(!empty($_GET['answerFive']))
                                {
                                    $answerTwo = $_GET['category_1'];
                                    $answerThree = $_GET['answer'];
                                    $answerFour = $_GET['category_2'];   
                                    
                                    echo "<h1> Total Points: " . cAnswers($answerOne, $answerTwo, $answerThree, $answerFour, $answerFive) . "/5 </h1>";
                                }
                                else 
                                {
                                    echo "<h2> Question 5 was left blank! Please select and answer! </h2>";
                                }
                            }
                            else 
                            {
                                echo "<h2> Question 4 was left blank! Please select and answer! </h2>";
                            }                            
                        }
                        else 
                        {
                            echo "<h2> Question 3 was left blank! Please select and answer! </h2>";
                        }
                    }
                    else 
                    {
                        echo "<h2> Question 2 was left blank! Please select and answer! </h2>";
                    }
                }
                else 
                {
                    echo "<h2> Question 1 was left blank! Please select and answer! </h2>";
                }
            }
        ?>
        
        <hr class="fColor"/>
        <footer>
            <br/><br/><br/>
            <img id="Logo" src="../img/logo.png" alt="CSUMB Logo"/>
            CST 336 Internet Programming 2018&copy;<br />
            <strong> Disclaimer: </strong> This information on this webpage is used only for academic purposes. <br />
        </footer>
    </body>
</html>