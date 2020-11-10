<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        <?php
        // put your code here
        
        //If-Else
        
        $nota1 = 70;
        
        if($nota1 >= 70){
            echo "<font color=green>"."Aprovado"."</font>"."<br/>";
        }else if($nota1 >= 50){
            echo "<font color=blue>"."Recuperação"."</font>"."<br/>";
        }else{
            echo "<font color=red>"."Reprovado"."</font>"."<br/>";
        }
        
        echo "<hr/>";
        
        if(($nota1 >= 40) & ($nota1 <= 60)){
            echo "Aluno selecionado"."<br/>";
        }else{
            echo "Aluno fora da faixa"."<br/>";
        }
        ?>
    </body>
</html>
