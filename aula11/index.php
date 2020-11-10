<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11 de PHP - Break</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        <?php
        // put your code here
        
        $vet = array("mouse","teclado","monitor","memoria","sair","microfone","impressora");
        $tam = count($vet);
        $i =0;
        
        echo "While<br/><br/>";
        $i=0;
        while ($i < $tam) {
            echo $vet[$i]."<br/>";
            
            $i++;
            if($vet[$i]=="sair")break;
        }
        echo "<hr/>";
        echo "Do While<br/><br/>";
        
        $i=0;
        do{
            echo $vet[$i]."<br/>";
            
            $i++;
            if($vet[$i]=="sair")break;
        }while ($i < $tam) ;
        echo "<hr/>";
        
        echo "loop for<br/><br/>";
        
        for($i=0; $i< $tam; $i++){
            
            if($vet[$i]=="sair")break;
            echo $vet[$i]."<br/>";
        }
        
        echo "<hr/>";
        echo "Loop foreach<br/><br/>";

        foreach ($vet as $pc) {
            
            if($pc == "sair")                break;
            echo $pc."<br/>";
        }
        ?>
    </body>
</html>
