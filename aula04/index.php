<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 04 vetores arrays</title>
    </head>
    <body>
        <?php
        // put your code here
        //array
        
        $vet=array(7);
        $vet2=array("nome"=>"Bruno","cidade"=>"BH", "curso"=>"PHP");
        
        $mat=array(
            array("carro1",65000),
            array("carro2",35000),
            array("carro3",50000)
            );
        
        $i=6;
        
        $vet[0]="carro";
        $vet[1]="aviao";
        $vet[2]="navio";
        $vet[3]="moto";
        $vet[4]="onibus";
        $vet[5]=123456;
        $vet[6]=$vet2["nome"];
        
        echo "<u>arrays</u>"."<br/>";
        echo $vet[0]."<br/>";
        echo $vet[1]."<br/>";
        echo $vet[2]."<br/>";
        echo $vet[3]."<br/>";
        echo $vet[4]."<br/>";
        echo $vet[5]."<br/>";
        echo $vet[6]."<br/>";
        
        echo "Elemento de indice $i = ".$vet[$i]."<br/>";
        
        echo "Nome: ".$vet2["nome"]." ;Cidade: ".$vet2["cidade"]." ;Curso: ".$vet2["curso"]."<br/>";
        
        echo "<br/>";
        echo "<u>matriz</u>"."<br/>";
        echo "carro A: ".$mat[0][0]." ;Valor: ".$mat[0][1]."<br/>";
        echo "carro B: ".$mat[1][0]." ;Valor: ".$mat[1][1]."<br/>";
        echo "carro C: ".$mat[2][0]." ;Valor: ".$mat[2][1]."<br/>";
        
        ?>
    </body>
</html>
