<?php

/**
 * Created by PhpStorm.
 * User: tfoliveira
 * Date: 14/06/2016
 * Time: 12:56
 */
namespace App\Models\InterfaceCliente;
interface  ClienteDiferenciado
{
    public function setEnderecoEspecifico($enderecoEspecifico);

    public function getEnderecoEspecifico();
}