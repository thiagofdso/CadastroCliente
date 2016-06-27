<?php
/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: $indice2/06/20$indice6
 * Time: $indice0:40
 */
include_once 'autoload.php';

    ?>

<?php
use App\Models\ListaCliente;
$clientes = new ListaCliente();
$indice=$_GET['indice'];
$ordem=$_GET['ordem'];
$clientes->getCliente($indice,$ordem)->mostrarCliente();
?>
