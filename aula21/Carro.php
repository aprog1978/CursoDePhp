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
    
    var $tipo; //1: passeio ; 2- Esporte ; 3 - Utilitario;
    var $velMax;
    var $nome;
    var $liga;
    var $vel;
    
    function __construct($tipo,  $nome) {
        $this->tipo = $tipo;
        //$this->velMax = $velMax;
        $this->nome = $nome;
        $this->liga=false;
        $this->vel=0;
        
        if($tipo==1){
            $this->velMax=160;  
        }else if($tipo==2){
            $this->velMax=300;
        }else if($tipo==3){
            $this->velMax=100;
        }
        
        
    }
    
    function id(){
            echo "<br/>";
            echo "Nome do Carro: ".$this->nome."<br/>";
            echo "Tipo do Carro: ".$this->tipo."<br/>";
            echo "Velocidade atual: ".$this->vel."<br/>";
            echo "Velocidade Maxima: ".$this->velMax."<br/>";
            
            echo "Carro esta: ";
            if($this->liga){
                echo "ligado";

            }else{
                echo "desligado";

            }
            echo"<br/>";
            echo "<hr/>";
            
        }
        
        function ligar(){
            $this->liga=true;
        }
        
        function desligar() {
            $this->liga=false;
            
        }
        
        function velocidade($vel) {
            if($vel > $this->velMax){
                $this->vel=$this->velMax;
            }else{
                $this->vel=$vel;
            }
            
        }
    
    

    
}
