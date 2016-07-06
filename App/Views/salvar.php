<?php
use App\DAO\DaoCliente;
use App\Util\ClienteUtil;
include_once 'autoload.php';
$dao =DaoCliente::getInstance();

$cliente = ClienteUtil::populaCliente($_POST);
$dao->persist($cliente);
$dao->flush();
header("location:../../index.php");