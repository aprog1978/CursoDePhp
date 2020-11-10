<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 18 de PHP - Passagem de valores pela url</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        date_default_timezone_set('America/Sao_Paulo');
        ?>
    </head>
    <body>
        <?php
        // put your code here
        $texto = "curso de php";
        $nome="bruno";
        $canal="vlog do fessor bruno";
        
        echo "<a href='pg1.php?"
                . "tx="
                .urlencode($texto)
                . "&no="
                . urlencode($nome)
                . "&cn="
                . urlencode($canal)
                . "' target='_self'>abre pg1</a><br/>";
        ?>
    </body>
</html>
