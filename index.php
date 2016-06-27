<title>Cadastro de Cliente</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<style>
    .tabela{
        padding-top: 80px;;
    }
    .table{
        width: 80%;
        margin-left: 10%;
        margin-right: 10%;
    }
    .titulo-tabela{
        background-color: #0f0f0f;
        color:#ffffff;
    }
</style>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="navbar-brand" ">Cadastro de Clientes</a>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detalhe Cliente</h4>
            </div>
            <div id="detalhes" class="modal-body">
                Teste
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 12/06/2016
 * Time: 10:40
 */
include_once 'App/autoload.php';


use App\Models\ListaCliente;
if(empty($_GET))
    $ordem = 2;
else
    if($_GET['ordem']==1)
        $ordem = 2;
    else
        $ordem = 1;
$clientes = new ListaCliente();

$clientes->criarTabela($ordem);
?>
<input type="hidden" id="ordem" value="<?=$ordem?>">
    </tbody>
</table>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#myModal").on("show.bs.modal", function(e) {
            var link = $(e.relatedTarget);
            var indice = link.attr("rel");
            var ordem = $("#ordem").val();

            $(this).find(".modal-body").load("App/Views/detalhe.php?indice="+indice+"&ordem="+ordem);

        });
    });
</script>