<?php

/**
 * Created by PhpStorm.
 * User: tfoliveira
 * Date: 14/06/2016
 * Time: 11:50
 */
class ClientePessoaFisica extends Cliente implements  PontuacaoCliente,ClienteDiferenciado
{

    private $cpf;
    private $enderecoEspecifico;

    public function __construct($nome,$sexo,$idade,$datanasc,$documento,$telefone,$endereco,$email)
    {
        parent::__construct($nome,$sexo,$idade,$datanasc,$documento,$telefone,$endereco,$email);
    }

    public function setDocumento($documento)
    {
        // TODO: Implement setDocumento() method.
        $this->cpf = $documento;
    }

    public function getDocumento()
    {
        // TODO: Implement getDocumento() method.
        return $this->cpf;
    }

    public function mostrarCliente()
    {
        if($this->enderecoEspecifico!='')
            $campoEndereco="<tr><td>Endereço de Cobrança</td></td><td>".$this->getEnderecoEspecifico()."</td></tr>";
        else
            $campoEndereco="";
        // TODO: Implement mostrarCliente() method.
        echo "<table class='table'><tr><td>Nome</td></td><td>".$this->getNome()."</td></tr>
<tr><td>Sexo</td></td><td>".$this->getSexo()."</td></tr>
<tr><td>Idade</td></td><td>".$this->getIdade()."</td></tr>
<tr><td>Data Nascimento</td></td><td>".$this->getDatanasc()."</td></tr>
<tr><td>CPF</td></td><td>".$this->getDocumento()."</td></tr>
<tr><td>Telefone</td></td><td>".$this->getTelefone()."</td></tr>
<tr><td>Endereço</td></td><td>".$this->getEndereco()."</td></tr>".$campoEndereco.
"<tr><td>Email</td></td><td>".$this->getEmail()."</td></tr>
<tr><td>Pontuação</td><td>".$this->getImportancia()." estrelas</td></tr></table>";
    }

    public function getImportancia()
    {
        // TODO: Implement getImportancia() method.
        if($this->getSexo()=="M")
            return 1;
        else
            return 2;
    }

    public function setEnderecoEspecifico($enderecoEspecifico)
    {
        // TODO: Implement setEnderecoEspecifico() method.
        $this->enderecoEspecifico = $enderecoEspecifico;
        return $this;
    }

    public function getEnderecoEspecifico()
    {
        // TODO: Implement getEnderecoEspecifico() method.
        return $this->enderecoEspecifico;
    }


}