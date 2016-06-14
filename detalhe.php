<?php
/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: $indice2/06/20$indice6
 * Time: $indice0:40
 */
require_once "Cliente.php";
require_once "ClienteDiferenciado.php";
require_once "PontuacaoCliente.php";
require_once "ClientePessoaFisica.php";
require_once "ClientePessoaJuridica.php";
require_once "ListaCliente.php";
require_once "ClienteBuilder.php";
    ?>

<?php
$clientes = new ListaCliente();
$indice=$_GET['indice'];
$ordem=$_GET['ordem'];
$clientes->getCliente($indice,$ordem)->mostrarCliente();
?>
