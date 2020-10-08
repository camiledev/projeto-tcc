<?php 

namespace src\Model\Domain;

class Usuario {

    private $cod_usu, $num_doc_usu, $dt_nasc, $genero_usu, $cep_usu, $num_end_usu, $compl_end_usu;

    public function getCod(){
        return $this->codigo;
    }

    public function setCod() {
        $this->codigo = $cod_usu;
    }

    public function getDoc(){
        return $this->documento;
    }

    public function setDoc($num_doc_usu) {
        $this->documento = $num_doc_usu;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($dt_nasc) {
        $this->data = $dt_nasc;
    }

    public function getGen(){
        return $this->genero;
    }

    public function setGen($genero_usu) {
        $this->genero = $genero_usu;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep_usu) {
        $this->cep = $cep_usu;
    }

    public function getEnd(){
        return $this->endereco;
    }

    public function setEnd($num_end_usu) {
        $this->endereco = $num_end_usu;
    }

    public function getCompl(){
        return $this->complemento;
    }

    public function setCompl($compl_end_usu) {
        $this->complemento = $compl_end_usu;
    }
}