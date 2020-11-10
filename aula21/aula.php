<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aula
 *
 * @author aprog1978
 */
class aula {
    //put your code here
    
    protected $var1="Bom dia";
    protected $var2="canalfessorbruno@gmail.com";
    protected $var3="www.webveste.com.br";
    
    function escreve() {
        echo "Metodo da class aula";
        echo "<br/>"
        . $this->var1;
        echo "<br/>"
        . $this->var2;
        echo "<br/>"
        . $this->var3;
        echo "<hr/>";
         
    }
}
