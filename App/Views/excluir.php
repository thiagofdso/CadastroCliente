<?php
use App\DAO\DaoCliente;

include_once 'autoload.php';
$dao =DaoCliente::getInstance();
$dao->Deletar($_GET['id']);
header("location:../../index.php");