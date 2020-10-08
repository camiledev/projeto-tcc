<?php 

namespace src\Model\Domain;

class Atendimento {

    private $cod_atend, $data_hora_atend, $desc_sintomas_atend, $desc_diagnostico_atend, $desc_medicacao_atend, $desc_exames_atend, $cod_status_atend;

    public function getCod(){
        return $this->codigo;
    }

    public function setCod($cod_atend) {
        $this->codigo = $cod_atend;
    }

    public function getDataHora(){
        return $this->datahora;
    }

    public function setDataHora($data_hora_atend) {
        $this->datahora = $data_hora_atend;
    }

    public function getSintomas(){
        return $this->sintomas;
    }

    public function setSintomas($desc_sintomas_atend) {
        $this->sintomas = $desc_sintomas_atend;
    }

    public function getDiag(){
        return $this->diagnostico;
    }

    public function setDiag($desc_diagnostico_atend) {
        $this->diagnostico = $desc_diagnostico_atend;
    }

    public function getMedic(){
        return $this->medicacao;
    }

    public function setMedic($desc_medicacao_atend) {
        $this->medicacao = $desc_medicacao_atend;
    }

    public function getExames(){
        return $this->exames;
    }

    public function setExames($desc_exames_atend) {
        $this->exames = $desc_exames_atend;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($cod_status_atend) {
        $this->status = $cod_status_atend;
    }
}