<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 10 de PHP - Loop Foreach</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        <?php
        // put your code here
        
        $transp = array("carro","moto","bicicleta","onibus","avião","navio","triciclo","barco","aeroplano","caminhão");
        
        echo "<table border=1>"
        ."<tr>"
                ."<th>"."Veiculos"."</th>"
        ."</tr>";
        
        foreach ($transp as $veiculo){
            
            echo "<tr>"
            ."<td>"."$veiculo". "</td>"
            ."</tr>";
            //if($veiculo=="bicicleta")                break;
        }
        
        echo "</table>";
        
        echo "<hr/>";
        
        foreach ($transp as $veiculo){
            if($veiculo == "bicicleta") {               
                echo "bicicleta esta na lista veiculos"."<br/>";
                break;
            }
            if($veiculo == "avião"){                
                echo "avião esta na lista veiculos"."<br/>";
            }
            if($veiculo == "trem")                {
                echo "trem esta na lista veiculos"."<br/>";
            }
            //else
            //    echo "trem NÃO esta na lista veiculos"."<br/>";
        }
        
        ?>
    </body>
</html>
