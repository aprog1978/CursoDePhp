<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type" content="text/html">
        <title>aula 2 de php - Constantes e Variaveis</title>
    </head>
    <body>
        <?php
        // put your code here
        //variaveis
        $variavel = "";
        
        $vnome = "Francisco";
        $vnum = 10; //int
        $vnum2 = 20.5; //flout
        $soma =0 ;
        
        echo "nome: $vnome"
                . "<br>numero: $vnum"
                . "<br>numero2: $vnum2"
                . "<br>soma: $soma"; 
        
        $vnome = "Campos";
        echo "<hr>";
        echo "nome: ". $vnome;
        
        ?>
    </body>
</html>
