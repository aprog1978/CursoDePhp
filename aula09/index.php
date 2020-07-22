<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 9 de PHP - Loop For</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        <?php
        // put your code here
        
        $i =0;
        
        $tam = 10;
        
        echo "<table border=1>"
        ."<tr>"
                ."<th>"."indice"."</th>"
        ."</tr>"
                ;
        for ($i=0; $i<$tam; $i++){
            echo "<tr>"
            ."<td>"
                    .($i+1)
            . "</td>"
            ."</tr>";
        }
        echo "</table>";
        
        echo "<hr/>";
        
        $vet=array($tam);
        $i=0;
        
        echo "<table border=1>"
        ."<tr>"
                ."<th>"."indice"."</th>"
                ."<th>"."vetor"."</th>"
        ."</tr>"
                ;
        for ($i=0; $i<$tam; $i++){
            if($i>0){
                $vet[$i]=2*$vet[$i-1];
            }else{
                $vet[$i]=2;
            }
            echo "<tr>"
            ."<td>".($i+1). "</td>"
            ."<td>".$vet[$i]. "</td>"
            ."</tr>";
        }
        echo "</table>";
        
        echo "<br />";
        for($ind=0; $ind < 80; $ind++){
            echo "-";
        }
        echo "<br />";
        
        
        ?>
    </body>
</html>
