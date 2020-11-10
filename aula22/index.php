<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 22 de PHP -  Classes parte 3</title>
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
        
        include_once './CarroBase.php';
        include_once './Carro.php';
        
        //$carro1=new CarroBase();
        
        $carro1 = new Carro(150, 280, 4);
        $carro2 = new Carro(100, 180, 4);
        $carro3 = new Carro(80, 100, 2);
        $carro4 = new Carro(250,380, 4);
        
        $carro1->liga();
        
        $carro1->status();
        ?>
    </body>
</html>
