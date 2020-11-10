<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP #03 - Operações com Variáveis </title>
    </head>
    <body>
        <?php
        // put your code here
        
        $num1 = 10;
        $num2 = 7;
        
        //Aritmética
        $soma = $num1 + $num2;
        $sub = $num1 - $num2;
        $mult = $num1 * $num2;
        $div = $num1 / $num2;
        $mod = $num1 % $num2;
        
        echo "<hr/>";
        echo "Soma de ". $num1
                . " com ". $num2
                . " = ".$soma;
        echo "<hr/>";
        echo "Sub de ". $num1
                . " com ". $num2
                . " = ".$sub;
        echo "<hr/>";
        echo "Mult de ". $num1
                . " com ". $num2
                . " = ".$mult;
        echo "<hr/>";
        echo "Div de ". $num1
                . " com ". $num2
                . " = ".$div;
        echo "<hr/>";
        echo "Mod de ". $num1
                . " com ". $num2
                . " = ".$mod;
        echo "<hr/>";
               
        echo "<hr/>";
        
        $num1 ++; // $num1 = $num1 + 1;
        
        echo "num1:$num1";
        echo "<hr/>";
        
        $num2 += 2; //$num2 = $num2 + 2;
        echo "num2:$num2";
        echo "<hr/>";
        
        //comparadores
        echo '<hr/>';
        $comp = $num1 == $num2;
        echo 'comp ($num1 == $num2):'. var_dump($comp);
        echo '<hr/>';
        
        $comp = $num1 != $num2;
        echo 'comp ($num1 != $num2):'. var_dump($comp);
        echo '<hr/>';
        
        $comp = $num1 <> $num2;
        echo 'comp ($num1 <> $num2):'. var_dump($comp);
        echo '<hr/>';
        
        $comp = $num1 > $num2;
        echo 'comp ($num1 > $num2):'. var_dump($comp);
        echo '<hr/>';
        $comp = $num1 < $num2;
        echo 'comp ($num1 < $num2):'. var_dump($comp);
        echo '<hr/>';
        $comp = $num1 >= $num2;
        echo 'comp ($num1 >= $num2):'. var_dump($comp);
        echo '<hr/>';
        $comp = $num1 <= $num2;
        echo 'comp ($num1 <= $num2):'. var_dump($comp);
        echo '<hr/>';
        
        
        ?>
    </body>
</html>
