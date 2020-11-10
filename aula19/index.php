<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 19 de PHP - Sessão</title>
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
        
        session_start();
        $_SESSION['vnome']="Bruno";
        $_SESSION['vempresa']="STLT Informatica";
        $_SESSION['vtexto']="texto para teste";
        $_SESSION['vlog']="s";
        
        
        
        //unset($_SESSION['vnome']);
        
        
        echo $_SESSION['vnome']." - ".$_SESSION['vempresa']."<br/>";
        echo $_SESSION['vtexto']."<br/>";
        
        if(isset($_SESSION['vcanal'])){
            echo $_SESSION['vcanal']."<br/>";
        }else{
            echo "Variavel vcanal NAO definida"."<br/>";
        }
        
        //session_destroy();
        
        ?>
        <br/>
        <a href="pg1.php" target="_self">Segunda pagina</a><br/>
        <a href="pg2.php" target="_self">terceira pagina</a><br/>
        <a href="sair.php" target="_self">sair</a><br/>
    </body>
</html>
