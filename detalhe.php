<?php
/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: $indice2/06/20$indice6
 * Time: $indice0:40
 */
require_once "Cliente.php";
require_once "ListaCliente.php";
require_once "ClienteBuilder.php";
    ?>

<?php
$clientes = new ListaCliente();
$indice=$_GET['indice'];
$ordem=$_GET['ordem'];
$clientes->getCliente($indice,$ordem)->mostrarCliente();
?>
