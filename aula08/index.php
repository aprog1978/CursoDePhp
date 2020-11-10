<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 08 de PHP - Loop Do While</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        <?php
        // put your code here
        
        $i = 0;
        $tam = 5;
        
        echo "Do While"."<br/>";
        
        do{
            echo "variavel i:".$i.";"
            .$tam.";"
            ."<br/>"               
            ;
            $i++;
        }while ($i < $tam);
        
        echo "<hr/>";
        
        echo "While"."<br/>";
        
        $i = 0;
        $tam = 5;
        
        while ($i < $tam){
            echo "variavel i:".$i.";"
            .$tam.";"
            ."<br/>"               
            ;
            $i++;
        }
        ?>
    </body>
</html>
