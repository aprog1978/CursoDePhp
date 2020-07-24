<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 14 de PHP - Funções Recursivas</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        <?php
        // put your code here
        
        function aula($num){
            if($num !=0){
                echo "Função Aula com valor $num <br/>";
                aula($num-1);
            }
        }
        
        // fatorial: 4! 4 x 3 x 2 x 1 = 24
        
        function fat($num) {
            if($num<0){
                return -1;
            }
            if($num<=1){
                return 1;
            }
            
            return $num*fat($num-1);
            
        }
        
        aula(10);
        
        echo "<hr/>";
        
        echo "fatorial de 6: ". fat(6)."<br/>";
        
        echo "fatorial de 0: ". fat(0)."<br/>";
        echo "fatorial de 1: ". fat(1)."<br/>";
        echo "fatorial de -11: ". fat(-11)."<br/>";
        
        ?>
    </body>
</html>
