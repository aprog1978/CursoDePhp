<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 25 de PHP - Classes parte 6</title>
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
        include_once './Carro.php';
        include_once './Transp.php';
        
        $car=new Carro("Vermelho");
        
        $tra =new Transp("azul");
        
        $car->cor();
        echo "<hr/>";
        $tra->cor();
        echo "<hr/>";
        
        ?>
    </body>
</html>
