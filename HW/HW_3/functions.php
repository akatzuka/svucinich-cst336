<?php
    
    session_start();
    
    function cAnswers($aOne, $aTwo, $aThree, $aFour, $aFive)
    {
        $total = 0;
        
        if ($aOne == 'Hyper Text Markup Language' || $aOne == 'hyper text markup language')
        {
            $total++;
        }
        if ($aTwo == 'Push')
        {
            $total++;
        }
        if ($aThree == '$')
        {
            $total++;
        }
        if ($aFour == 'PHP: Hypertext Processor')
        {
            $total++;
        }
        if ($aFive == 'Structured Query Language')
        {
            $total++;
        }
        
        return $total;
    }
    
    function AnswerTwo($option)
    {
        if($option == $_GET['category_1'])
        {
            return "selected";
        }
    }
    
    function AnswerFour($option)
    {
        if($option == $_GET['category_2'])
        {
            return "selected";
        }
    }
    
?>