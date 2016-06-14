<?php

/**
 * Created by PhpStorm.
 * User: tfoliveira
 * Date: 14/06/2016
 * Time: 11:50
 */
class ClientePessoaJuridica extends Cliente implements  PontuacaoCliente,ClienteDiferenciado
{

    private $empresa;
    private $cnpj;
    private $enderecoEspecifico;

    public function __construct($empresa,$nome,$sexo,$idade,$datanasc,$documento,$telefone,$endereco,$email)
    {
        $this->empresa = $empresa;
        parent::__construct($nome,$sexo,$idade,$datanasc,$documento,$telefone,$endereco,$email);
    }

    /**
     * @return mixed
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * @param mixed $empresa
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }


    public function setDocumento($documento)
    {
        // TODO: Implement setDocumento() method.
        $this->cnpj = $documento;
    }

    public function getDocumento()
    {
        // TODO: Implement getDocumento() method.
        return $this->cnpj;
    }
    public function mostrarCliente(){
        if($this->enderecoEspecifico!='')
            $campoEndereco="<tr><td>Endereço de Cobrança</td></td><td>".$this->getEnderecoEspecifico()."</td></tr>";
        else
            $campoEndereco="";
        echo "<table class='table'><tr><td>Empresa</td></td><td>".$this->empresa."</td></tr>
<tr><td>Titular</td></td><td>".$this->getNome()."</td></tr>
<tr><td>Sexo</td></td><td>".$this->getSexo()."</td></tr>
<tr><td>Idade</td></td><td>".$this->getIdade()."</td></tr>
<tr><td>Data Nascimento</td></td><td>".$this->getDatanasc()."</td></tr>
<tr><td>CNPJ</td></td><td>".$this->getDocumento()."</td></tr>
<tr><td>Telefone</td></td><td>".$this->getTelefone()."</td></tr>
<tr><td>Endereço</td></td><td>".$this->getEndereco()."</td></tr>".$campoEndereco.
"<tr><td>Email</td></td><td>".$this->getEmail()."</td></tr>
<tr><td>Pontuação</td></td><td>".$this->getImportancia()." estrelas</td></tr></table>";

    }

    public function getImportancia()
    {
        // TODO: Implement getImportancia() method.
        if($this->getSexo()=="M")
            return 3;
        else
            return 4;
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