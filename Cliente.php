<?php

/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 12/06/2016
 * Time: 10:04
 */
class Cliente
{
    public $nome;
    public $sexo;
    public $cpf;
    public $endereco;
    public $idade;
    public $telefone;
    public $datanasc;
    public $email;

    public function  __construct($nome,$sexo,$idade,$datanasc,$cpf,$telefone,$endereco,$email)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->datanasc = $datanasc;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->email = $email;
    }

    public function mostrarCliente(){
        echo "<table class='table'><tr><td>Nome</td></td><td>".$this->nome."</td></tr>
<tr><td>Sexo</td></td><td>".$this->sexo."</td></tr>
<tr><td>Idade</td></td><td>".$this->idade."</td></tr>
<tr><td>Data Nascimento</td></td><td>".$this->datanasc."</td></tr>
<tr><td>CPF</td></td><td>".$this->cpf."</td></tr>
<tr><td>Telefone</td></td><td>".$this->telefone."</td></tr>
<tr><td>Endereço</td></td><td>".$this->endereco."</td></tr>
<tr><td>Email</td></td><td>".$this->email."</td></tr></table>";

    }
}