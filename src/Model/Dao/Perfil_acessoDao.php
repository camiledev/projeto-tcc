<?php

namespace src\Model\Dao;

class Perfil_acessoDao{

    public function create(Perfil_acesso $p) {
        $sql = 'INSERT INTO perfil_acesso($nome_tipo_usu, $cod_status_usu) VALUES (?, ?)';

        $perfil = conexao::getConn()->prepare($sql);

        $perfil->bindValue(1, $p->getNome());
        $perfil->bindValue(2, $p->getStatus());
        $perfil->execute();

    }

    public function read(){

    }

    public function update(Perfil_acesso $p) {

    }

    public function delete($id){
        
    }
}