<style>
    .tabela{
        padding-top: 80px;;
        margin-left: 10%;
        margin-right: 10%;
    }
    .titulo-tabela{
        background-color: #0f0f0f;
        color:#ffffff;
    }
</style>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detalhe Cliente</h4>
            </div>
            <div id="detalhes" class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<div class='container-fluid tabela'>
<a class='btn btn-success' id="criar"  href="App/Views/criar.php">Adicionar Cliente</a>
    <br><br>
<?php
use App\Models\ListaCliente;

/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 12/06/2016
 * Time: 10:40
 */
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
        $("#criar").click(function(event){
            // Load the content of the page referenced in the a-tags href
            event.preventDefault();
            $("#content").load($(this).attr("href"));
            // Prevent browsers default behavior to follow the link when clicked
            return false;
        });
        $("[rel=editar]").click(function(event){
            // Load the content of the page referenced in the a-tags href
            event.preventDefault();
            $("#content").load($(this).attr("href"));
            // Prevent browsers default behavior to follow the link when clicked
            return false;
        });
    });
</script>
