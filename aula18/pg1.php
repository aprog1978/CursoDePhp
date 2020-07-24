<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina 1</title>
    </head>
    <body>
        <?php
        // put your code here
        if(isset($_GET['tx'])){
            $vtexto = $_GET['tx'];
            echo "$vtexto"."<br/>";
        
        }
        
        if(isset($_GET['no'])){
            $vnome = $_GET['no'];
            echo $vnome."<br/>";
        }
        
        if(isset($_GET['cn'])){
            $vcanal = $_GET['cn'];
            echo $vcanal."<br/>";
        }
        
        
        
        ?>
    </body>
</html>
