<?php
namespace App\Util;
use App\Models\TipoCliente\ClientePessoaFisica;
use App\Models\TipoCliente\ClientePessoaJuridica;
class ClienteUtil
{
    public static function populaCliente($row) {
        if($row['tipo']=='1')
            $pojo = new ClientePessoaFisica($row['nome'],$row['sexo'],$row['idade'],$row['data_nascimento'],
                $row['documento'],$row['telefone'],$row['endereco'],$row['email']);
        else
            $pojo = new ClientePessoaJuridica($row['empresa'],$row['nome'],$row['sexo'],$row['idade'],$row['data_nascimento'],
                $row['documento'],$row['telefone'],$row['endereco'],$row['email']);
        if(isset($row['id']))
            $pojo->setId($row['id']);
        if($row['endereco_cobranca'])
            $pojo->setEnderecoEspecifico($row['endereco_cobranca']);
        return $pojo;
    }
}