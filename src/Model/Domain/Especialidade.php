<?php 

namespace src\Model\Domain;

class Especialidade {

    private $cod_espec, $nome_espec, $cod_status_espec;

    public function getCod(){
        return $this->codigo;
    }

    public function setCod($cod_espec) {
        $this->codigo = $cod_espec;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome_espec) {
        $this->nome = $nome_espec;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($cod_status_espec) {
        $this->status = $cod_status_espec;
    }
}