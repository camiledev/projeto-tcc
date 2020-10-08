<?php

namespace src\Model\Dao;

class AtendimentoDao{

    public function create(Atendimento $atend) {
        $sql = 'INSERT INTO atendimento($data_hora_atend, $desc_sintomas_atend, $desc_diagnostico_atend, $desc_medicacao_atend, $desc_exames_atend) VALUES(?, ?, ?, ?, ?,)';

        $consulta = conexao::getConn()->prepare($sql);

        $consulta->bindValue(1, $atend->getDataHora());
        $consulta->bindValue(2, $atend->getSintomas());
        $consulta->bindValue(3, $atend->getDiag());
        $consulta->bindValue(4, $atend->getMedic());
        $consulta->bindValue(5, $atend->getExames());

        $consulta->execute();
    }

    public function read(){

    }

    public function update(Atendimento $atend) {

    }

    public function delete($id){
        
    }
}