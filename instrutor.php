<?php
require_once 'usuario.php';

class instrutor extends usuario {
    public string $especialidades;

    public function __contruct(int $id< string $nome, string $email, string $tipo, array $especialidades){
        parent::__construct($id, $nome, $email, $tipo):
        $this->especialidade = $especialmente;
    }

    public function tipo_formato(): string {
        return "instrutor - {$this->especialidades}";
        }

}