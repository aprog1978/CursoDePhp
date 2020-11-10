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

abstract class CarroBase implements CarroPadrao{
    //put your code here
    public $cor;
    public $vel =0;
    
    function CarroBase($cr) {
        $this->cor=$cr;
    }

    function getCor() {
        return $this->cor;
    }

    function getVel() {
        return $this->vel;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setVel($vel) {
        $this->vel = $vel;
    }

    
    function status() {
        echo "<br/>";
        echo "Carro: " . $this->cor;
        echo "<br/>Velocidade: ". $this->vel;
        echo "<br/>";

    }

    #final function Cor() {
    function Cor() {
        echo "<hr/>";
        echo "<br/>Minha cor: ".$this->cor;
        echo "<br/>Metodo original<hr/>";


    }

}
