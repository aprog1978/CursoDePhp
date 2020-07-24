<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 17 de PHP - Função Isset</title>
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
        
        
        //$aula = null;
        
        if(isset($_POST["f_nome"])){
            $vnome=$_POST['f_nome'];
            echo "Nome: $vnome<br/>";
        }else{
            //echo "Dados nao submetidos";
        
        echo '<hr/>'.
        '<form name="f_aula" method="post" action="index.php">'.
            '<label>Nome</label><br>'.
            '<input type="text" name="f_nome"/><br/>'.
            '<input type="submit" value="Enviar"/>'.
            
        '</form>';
                }
        
        ?>
    </body>
</html>
