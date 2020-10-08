<?php

namespace src\Model\Dao;

class AcessoDao{

    public function create(Acesso $a) {
        $sql = 'INSERT INTO acesso(nome_usu, email_usu, senha_usu) VALUES (?, ?, ?)';
        
        $login = conexao::getConn()->prepare($sql);

        $login->bindValue(1, $a->getNome());
        $login->bindValue(2, $a->getEmail());
        $login->bindValue(3, $a->getSenha());

        $login->execute();
    }

    public function login(Acesso $a): array
    {
        try {
            $sql = "SELECT * FROM acesso WHERE email_usu = ? AND senha_usu = ?";
            $start = Conexao:: getConn()-> prepare($sql);
            $start -> bindValue(1, $usuario->getEmail());
            $start -> bindValue(2, $usuario->getEmail());
            $start->execute();
    
            if($start->rowCount() > 0){
                $result = $start->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            }else{
                return[];
            }
        }catch(\PDOException $exception) {
            throw $exception;
        }
        

    }

    public function read() {
        try {
            $sql = "SELECT * FROM usuarios";
            $stmt = conexao::getConn()->prepare($sql);
            $stmt->execute();
    
            if($stmt->rowCount() > 0){
                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            }else {
                return [];
            }
        }catch(\PDOException $exception) {
            throw $exception;
        }
        
    }

    public function update(Acesso $a) {

    }

    public function delete($id){
        
    }
}