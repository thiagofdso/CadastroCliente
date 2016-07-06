<div class="container col-md-12 " style="margin-top:80px;">
    <form class="form-horizontal" role="form" method="POST" action="App/Views/salvar.php">
        <h1>Cadastro de Clientes</h1>
        <div class="form-group">
            <label class="col-md-1 control-label" for="nome">Nome:</label>
            <div class="col-md-6 col-md-offset-1">
                <input class="form-control" minlength="5" name="nome" type="text"  id="nome" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-1 control-label" for="sexo">Sexo:</label>
            <div class="col-md-6 col-md-offset-1">
                <select name="sexo" class="form-control" id="sexo">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label" for="email">Email:</label>
            <div class="col-md-6 col-md-offset-1">
                <input class="form-control"   name="email" type="email"  id="email" required>
             </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label" for="telefone">Telefone:</label>
            <div class="col-md-6 col-md-offset-1">
                <input class="form-control"   name="telefone" type="tel"  id="telefone" pattern='[\(]\d{2}[\)]\d{5}[\-]\d{4}' required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label" for="idade">Idade:</label>
            <div class="col-md-6 col-md-offset-1">
                <input maxlength="2" class="form-control"   name="idade" type="number"  id="idade" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" style="text-align: left" for="data_nascimento">Data Nascimento:</label>
            <div class="col-md-3">
                <input maxlength="10" class="form-control"   name="data_nascimento" type="date" value="2016-01-01"  id="data_nascimento" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label" for="tipo">Tipo:</label>
            <div class="col-md-6 col-md-offset-1">
                <select name="tipo" class="form-control" id="tipo">
                    <option value="1">Pessoa Física</option>
                    <option value="2">Pessoa Jurídica</option>
                </select>
            </div>
        </div>
        <div class="form-group" id="divempresa" style="display:none">
            <label class="col-md-1 control-label" for="empresa">Empresa:</label>
            <div class="col-md-6 col-md-offset-1">
                <input class="form-control"   name="empresa" type="text"  id="empresa">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-1 control-label" for="documento">CPF/CNPJ:</label>
            <div class="col-md-6 col-md-offset-1">
                <input maxlength="24" class="form-control"   name="documento" type="text"  id="documento" pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})" required>
             </div>
        </div>

        <div class="form-group">
            <label class="col-md-1 control-label" for="endereco">Endereço:</label>
            <div class="col-md-6 col-md-offset-1">
                <input class="form-control"   name="endereco" type="text"  id="endereco" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="endereco_cobranca">Endreço de Cobrança:</label>
            <div class="col-md-6 ">
                <input class="form-control"   name="endereco_cobranca" type="text"  id="endereco_cobranca">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-primary">
                    Adicionar Cliente
                </button>
                <a href="index.php" id="cancel" class="btn btn-info">
                    Cancelar
                </a>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('#telefone').mask('(00)00000-0000');
        var tipo=$('#tipo');
        var doc = $('#documento');
        var divempresa=$('#divempresa');
        doc.mask('000.000.000-00');
        tipo.on('change',function (event) {

            doc.val('');
            if (tipo.val() == 1) {
                doc.mask('000.000.000-00');
                divempresa.hide();
            }
            else{
                doc.mask('00.000.000/0000-00');
                divempresa.show();
            }
        });
    });
</script>