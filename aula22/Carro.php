<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carro
 *
 * @author aprog1978
 */
include_once './CarroBase.php';

class Carro extends CarroBase{
    //put your code here
    
    //function Carro($param) {} // metodo construtor
    function __construct($pt,$vm,$po) {
        $this->potencia=$pt;
        $this->valMax=$vm;
        $this->portas=$po;
        $this->status();
    }
    
    function teste() {
        
    }

}
