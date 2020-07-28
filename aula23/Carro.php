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

class Carro extends CarroBase {
    //put your code here
    function __construct($pt,$vm) {
        $this->potencia=$pt;
        $this->velMax=$vm;
        
        $this->liga();
        $this->status();
    }
    
    


}
