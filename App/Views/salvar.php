<?php
use App\DAO\DaoCliente;

include_once 'autoload.php';
$dao = new DaoCliente();

$cliente = $dao->populaCliente($_POST);
if($cliente->getId())
    $dao->Editar($cliente);
else
    $dao->Inserir($cliente);
header("location:../../index.php");