<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 7 de PHP - Loop While</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        <?php
        // put your code here
        
        $i=0;
        $tam = 5;
        $vet=array($tam);
        
        
        
        echo "<table border='1'>";
        echo "<tr><th>indice</th></tr>";
        while ($i < $tam){
            echo "<tr>"."<td>".($i+1)."</td>"."</tr>";
            $i++; // $i = $i + 1;
        }
        echo "</table>";
        
        echo "<br/><hr/>";
        
        $i=0;
        while ($i < $tam)
        {
            $vet[$i]="php".$i;
            $i++;
        }
        
        $i=0;
        echo "<table border='1'>";
        echo "<tr>"
        . "<th>indice</th>"
        . "<th>vet</th>"
        . "</tr>";
        while ($i < $tam){
            echo "<tr>"
            ."<td>".($i+1)."</td>"
            ."<td>".($vet[$i])."</td>"
                    ."</tr>";
            $i++; // $i = $i + 1;
        }
        echo "</table>";
        
        ?>
    </body>
</html>
