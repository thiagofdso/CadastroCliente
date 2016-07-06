<?php
use App\DAO\DaoCliente;

include_once 'autoload.php';
$dao = new DaoCliente();
$dao->Deletar($_GET['id']);
header("location:../../index.php");