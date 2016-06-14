<?php

/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 12/06/2016
 * Time: 10:04
 */
abstract class Cliente
{
    private$nome;
    private$sexo;
    private$endereco;
    private$idade;
    private$telefone;
    private$datanasc;
    private$email;

    public function  __construct($nome,$sexo,$idade,$datanasc,$documento,$telefone,$endereco,$email)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->datanasc = $datanasc;
        $this->setDocumento($documento);
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->email = $email;
    }
    public abstract function setDocumento($documento);
    public abstract function getDocumento();
    public abstract function mostrarCliente();

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getDatanasc()
    {
        return $this->datanasc;
    }

    /**
     * @param mixed $datanasc
     */
    public function setDatanasc($datanasc)
    {
        $this->datanasc = $datanasc;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }




}