<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 24 de PHP - Classes parte 5(static)</title>
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
        
        $car1=new Carro("Vermelho");
        $car2=new Carro("Verde");
        $car3=new Carro("Azul");
        
        $car1->status();
        $car2->status();
        $car3->status();
        
        //$car1->mudaVel(200);
        $car2->mudaVel(150);
        //$car3->mudaVel(100);
        
        $car1->status();
        $car2->status();
        $car3->status();
        
        
        
        ?>
    </body>
</html>
