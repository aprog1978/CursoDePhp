<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 21 de PHP - Classes parte 2</title>
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
        include_once './aula.php';
        include_once './canal.php';
        
        $carro1 = new Carro(2, "Rapid");
        $carro2 = new Carro(3, "Carregador");
        $carro3 = new Carro(1, "Basic");
        $carro4 = new Carro(2, "veloz");
        $carro5 = new Carro(2, "flecha");
        
        $carro1->ligar();
        $carro3->ligar();
        $carro5->ligar();
        
        $carro5->velocidade(450);
        
        $carro3->desligar();
        
        $carro1->id();
        $carro2->id();
        $carro3->id();
        $carro4->id();
        $carro5->id();

        $aulaObj = new aula();
        $canalObj =new canal();
        
        $aulaObj->escreve();
        
        //$canalObj ->escreve();
        $canalObj->escreve2();
        //echo "<hr/>";
        //echo $aulaObj->var3;
        
        /*echo "<br/>"
        . $this->var1;
        echo "<br/>"
        . $this->var2;
        echo "<br/>"
        . $this->var3;*/
              
        
        ?>
    </body>
</html>
