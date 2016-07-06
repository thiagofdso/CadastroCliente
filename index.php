<title>Cadastro de Cliente</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.mask.js"></script>
<script src="assets/js/bootstrap.js"></script>
<?php
/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 12/06/2016
 * Time: 10:40
 */
include_once 'App/autoload.php';
?>


<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="navbar-brand" href="index.php">Cadastro de Clientes</a>
        </div>
    </div>
</div>
<div id="content" class="container">

    <?php include 'App/Views/listar.php';?>

</div>


