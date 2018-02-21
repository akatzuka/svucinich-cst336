<?php

    function genPass()
    {
        $arr1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        $arr2 = array(A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z);
        $r_length = rand(5,10);
        $r_nums = rand(1,3);
        $t_nums = 0;
        $pass = [];
        $digorlet;
        
        for ($i = 0; $i <= $r_length; $i++)
        {
                if ($t_nums < $r_nums)
                {
                    $digorlet = rand(0,2);
                }
                if($t_nums >= $r_nums)
                {
                    $digorlet = 0;
                }
                if($digorlet >= 1)
                {
                    array_push($pass,$arr1[rand(0,8)]);
                    $t_nums++;
                }
                if($digorlet == 0)
                {
                    array_push($pass,$arr2[rand(0,25)]);
                }
                echo $pass[$i];
        }
        return($pass);
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Challenge 3: Password Generator</title>
    </head>
    <body>
        <table>
            <tr>
            <?php for ($i = 0; $i < 26; $i++)
            {
               echo"<td>". genPass(). "</td>";
               echo "<tr>";
               echo "<br>";
            }
            ?>
            </table>
    </body>
</html>