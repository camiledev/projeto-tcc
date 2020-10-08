<?php 

namespace src\Model\Domain;

class Acesso{

    private $cod_usu, $nome_usu, $email_usu, $senha_usu; 

    public function getCod(){
        return $this->codigo;
    }

    public function setCod($cod_usu) {
        $this->codigo = $cod_usu;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome_usu) {
        $this->nome = $nome_usu;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email_usu) {
        $this->email = $email_usu;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha_usu) {
        $this->senha = $senha_usu;
    }
}