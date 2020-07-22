<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 06 de PHP - Condicional Switch Case</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        <?php
        // put your code here
        //Switch case
        
        $opc = 4; // 1:carro; 2:moto; 3:bicicleta; 4:navio; 5:aviao;
        
        switch ($opc) {
        case 1:
            echo "carro";                
        break;
        case 2:
            echo "moto";                
        break;
        case 3:
            echo "bicicleta";                
        break;
        case 4:
            echo "navio";                
        break;
        case 5:
            echo "aviao";                
        break;
        default:
            echo "Nao existe veiculo.";
        break;
        }
        echo "<br/>";
        echo "<hr/>";
        
        switch ($opc) {
        case ($opc <= 3 && $opc > 0):
            echo "transporte terrestre";
            break;
        case 4:
            echo "transporte maritimo";
            break;
        case 5:
            echo "Transporte aereo";
            break;

        default:
            break;
        }
        
        echo "<br/>";
        ?>
    </body>
</html>
