<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CarroBase
 *
 * @author aprog1978
 */

include_once './CarroPadrao.php';
include_once './CarroGuerra.php';

abstract class CarroBase implements CarroPadrao, CarroGuerra {
    //put your code here
    
    public $potencia;
    public $velMax;
    private $ligado=false;
    
    function liga() {
        $this->ligado=TRUE;
    }
    
    function desliga() {
        $this->ligado=FALSE;
        
    }
    
    function status() {
        echo "<hr/>";
        echo "Potencia: ".$this->potencia."<br/>";
        echo "Velocidade: ".$this->velMax."<br/>";
        echo "Este carro esta ";
        if($this->ligado){
            echo "ligado";
        }else{
            echo "desligado";
        }
        echo "<hr/>";
    
    }            
    
    function acelera(){}
    function freia(){} 
    
    function atiraCanhao() {}
    function atiraMetralhadora() {}
    
}
