<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 12 de PHP - Funções</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        <?php
        // put your code here
        
        function aula(){
            echo "ola mundo";
            echo "<br/>";
            echo "aula sobre funções";
            echo "<br/>";
        }
        
        function soma($v1, $v2) {
            $soma=$v1 + $v2;
            echo "<br/>Soma de $v1 com $v2 = $soma<br/>";
            //return $soma;
        }
        
        function soma2($n1, $n2) {
            $res=$n1+$n2;
            return $res;
        }
        
        $valores = array(1,3,5,7,9,12,6,4,20,18,19,34,2);
        
        function media($val) {
            $tam= count($val);
            $soma=0;
            
            for($i=0;$i<$tam;$i++){
                $soma+=$val[$i];
            }
            
            return $soma/$tam;
    
        }
        
        for($i=0; $i<1; $i++){
        echo "<hr/>";
        aula();
        echo "<hr/>";
        }
        
        soma(7, 3);
        soma(5, 25);
        
        echo "<hr/>";
        echo "resultado = ".soma2(20, 12)."<br/>";
        echo "resultado = ".soma2(20, 12)."<br/>";
        
        
        echo "<hr/>";
        echo "media = ". media($valores)."<br/>";
        
        ?>
    </body>
</html>
