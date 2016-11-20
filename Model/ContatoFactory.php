<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContatoFactory
 *
 * @author patty
 */
class ContatoFactory extends AbstractFactory {

    public function __construct() {
        parent::__construct();
    }


    public function buscar($param) {
        foreach ($db->query('SELECT *  FROM tbcontato') as $value) {
            if($value['name']==$param){
                return 1;
            }else{
                return 0;
            }
        }
       echo $result;
    }

    public function listar() {
        
    }

    public function salvar($obj) {
   
        $db = "INSERT INTO tbcontato (nome, email)"
                . "VALUES ($obj)";
        
    }

//put your code here
}
