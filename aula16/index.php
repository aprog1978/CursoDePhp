<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 16 de PHP - Include</title>
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
        
        include './menu.php';
        
        include './datehora.php';
        
        
        ?>
    </body>
</html>
