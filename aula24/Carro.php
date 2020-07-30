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
class Carro {
    //put your code here
    
    public $cor;
    public static $vel=0;
    
    function __construct($cor) {
        $this->cor = $cor;
        //$this->vel=$vel;
        //self::$vel=$vel;
    }
    
    function status(){
        echo "<hr/>";
        echo "Cor: ".$this->cor."<br/>";
        echo "Velocidade".self::$vel."<br/>";
        echo "<hr/>";
    }

    function mudaVel($vl) {
        self::$vel=$vl;
        echo "<hr/><br/>";
        echo "Velocidade alterada."."<br/>";
        echo "<br/><hr/>";
        
    }
}
