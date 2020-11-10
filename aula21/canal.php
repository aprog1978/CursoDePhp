<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of canal
 *
 * @author aprog1978
 */

include_once './aula.php';

class canal extends aula{
    //put your code here
    private $vc1 = "Curso de PHP";
    private $vc2 = "Bruno";
    
    function escreve2() {
        echo "Metodo da classe canal";
        echo "<br/>"
        . $this->vc1;
        echo "<br/>"
        . $this->vc2;
        echo "<hr/>";
        echo "<br/>"
        . $this->var1;
    }
    
}
