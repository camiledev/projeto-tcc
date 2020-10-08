<?php 

namespace src\Model\Domain;

class Perfil_acesso{

    private $cod_tipo_usu, $nome_tipo_usu, $cod_status_usu;

    public function getCod(){
        return $this->codigo;
    }

    public function setCod($cod_tipo_usu) {
        $this->codigo = $cod_tipo_usu;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome_tipo_usu) {
        $this->nome = $nome_tipo_usu;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($cod_status_usu) {
        $this->status = $cod_status_usu;
    }

}