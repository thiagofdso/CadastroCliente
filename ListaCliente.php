<?php

/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 12/06/2016
 * Time: 12:58
 */

class ListaCliente
{
    public $lista;
    public function __construct()
    {
        $builder = new ClienteBuilder();
        $this->lista = $builder->getClientList();
    }

    public function getCliente($indice,$ordem){
        if($ordem==1)
            $this->lista=array_reverse($this->lista);
        return $this->lista[$indice];
    }

    public function criarTabela($ordem)
    {
        echo "<div class='container-fluid tabela'>
<table class='table'>
    <thead class ='titulo-tabela'>
    <tr>
        <th><a href='index.php?ordem=".$ordem."'>
                <span class='glyphicon glyphicon-sort' aria-hidden='true'></span>
         </a></th>
         <th>Tipo Cliente</th>
        <th>Nome</th>
        <th>CPF/CNPJ</th>
        <th></th>
    </tr>
    </thead>
    <tbody>";

        if($ordem==1)
            $this->lista=array_reverse($this->lista);

            for($i=0;$i<10;$i++) {
                echo "<tr>";
                echo "<th scoope='row'>" . ($i+1) . "</th>";
                if($this->lista[$i] instanceof ClientePessoaFisica)
                    echo "<td>Pessoa Física</td>";
                else
                    echo "<td>Pessoa Jurídica</td>";
                echo "<td>" . $this->lista[$i]->getNome() . "</td>";
                echo "<td>" . $this->lista[$i]->getDocumento() . "</td>";
                echo "<td><button type='button' class='btn btn-link'  data-toggle='modal' data-target='#myModal' rel=". $i .">Detalhar</button></td>";
                echo "</tr>";
            }
    }
}