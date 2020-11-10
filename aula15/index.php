<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 15 de PHP - Manipulação de Data e Hora</title>
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
        
        $dia= date("d");
        $mes = date("m");
        $ano = date("Y");
        
        $hora = date("H"); //h:12 horas ou H:24 horas
        $min = date("i");
        $seg = date("s");
        
        $meses = array("Jan",
            "Fev",
            "Mar",
            "Abr",
            "Mai",
            "Jun",
            "Jul",
            "Ago",
            "Set",
            "Out",
            "Nov",
            "Dez");
        
        echo "Dia: ".$dia ." de ". $meses[$mes-1]. " de ".$ano."<br/>";
        echo "Hora: ".$hora. ":". $min.":".$seg."<br/>";
        
        ?>
    </body>
</html>
