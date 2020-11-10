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
        
        //$soma = 10 + 20;
        $soma = $vnum + $vnum2;
        
        //Constante;
        define("cnome", "Francisco");
        define("cpi",3.1415);
        define("cnomeProgramador","Francisco Analista Programador");
        define("cver", PHP_VERSION);
        define("cdir", __DIR__);
        define("cfile", __FILE__);
                
        
        echo "nome: $vnome"
                . "<br>numero: $vnum"
                . "<br>numero2: $vnum2"
                . "<br>soma: $soma"; 
        
        $vnome = "Campos";
        echo "<hr/>";
        echo "nome: ". $vnome;
        
        echo "<hr/>";
        echo "Constante: ". cnome . "<br/>"
                . "Pi:" . cpi . "<br/>"
                . "Programador:".cnomeProgramador. "<br/>"
                . "Const. Predeterminada nome arquivo:".cfile."<br/>"
                ."Versao PHP". cver. "<br/>"
                . "Dir:".cdir."<br/>"
                . "Versao SO:".PHP_OS."<br/>"
                . "num line:".__LINE__."<br/>";
       
        ?>
    </body>
</html>
