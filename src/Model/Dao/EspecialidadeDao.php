<?php

namespace src\Model\Dao;

class EspecialidadeDao{

    public function create(Especialidade $e) {
        $sql = 'INSERT INTO especialidade(nome_espec, $cod_status_espec) VALUES (?, ?)';

        $especialidade = conexao::getConn()->prepare($sql);

        $especialidade->bindValue(1, $e->getNome());
        $especialidade->bindValue(2, $e->getStatus());

        $especialidade->execute();
    }

    public function read(){

    }

    public function update(Especialidade $e) {

    }

    public function delete($id){
        
    }
}