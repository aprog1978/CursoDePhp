<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 13 de PHP - Recebendo dados de formulario HTML</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        <form name="f_cad" method="post" action="aula13.php">
            <label>Nome:</label><br/>
            <input type="text" name="f_nome" size="40" maxlength="30"><br/>
            <label>Senha:</label><br/>
            <input type="password" name="f_senha" size="40" maxlength="20"><br/>
            
            <input type="submit" value="Enviar"/>
            <input type="reset" value="Limpar"/>
            
        </form>
        <?php
        // put your code here
        ?>
        
    </body>
</html>
