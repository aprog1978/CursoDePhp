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
//class CarroBase {
abstract class CarroBase{

    //put your code here
    public $potencia;
    public $valMax;
    public $portas;
    public $ligado=false;
    
    public function liga() {
        $this->ligado=true;
        
    }
    
    public function desligar() {
        $this->ligado=FALSE;
        
    }
    
    public function status(){
        echo "<hr/>";
        echo "Potencia: "
        . $this->potencia
        . "<br/>";
        echo "Velocidade Maxima: "
        . $this->valMax
        ."<br/>";
        echo "Portas: "
        . $this->portas
        ."<br/>";
        echo "Carro ";
        if($this->ligado){
            echo "ligado";
        }else{
            echo "desligado";
        }
            
        echo "<hr/>";
    }
    
    abstract function teste() ;
    
}
