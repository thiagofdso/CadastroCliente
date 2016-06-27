<?php

/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 12/06/2016
 * Time: 10:14
 */
namespace  App\Models\Builder;
use  App\Models\TipoCliente\ClientePessoaFisica;
use  App\Models\TipoCliente\ClientePessoaJuridica;
class ClienteBuilder
{
    public function getClientList(){
        $array = array(
            0 => new ClientePessoaFisica("Lucca Gustavo Pereira","M",22,"17/03/1994","281.070.842-84","(54) 2954-6029","Avenida Luís Pessoa da Silva Neto 1376","lucca_g_pereira@bemarius.com.br"),
            1 => (new ClientePessoaFisica("Beatriz Mariane Isabelle Barros","F",22,"15/01/1994","950.206.693-69","(95) 2857-1632","Rua Nilo Melo","bmbarros@verdana.com.br"))->setEnderecoEspecifico("Rua Melo Cruz"),
            2 => new ClientePessoaJuridica("BANPARA SA","Luiz Heitor Otávio Araújo","M",27,"15/02/1989","78.645.100/0001-62","(95) 2703-9613","Rua Maria das Graças Paulino","luiz_h_araujo@landovale.com.br"),
            3 => (new ClientePessoaFisica("Davi Julio Luan Mendes","M",30,"10/03/1986","890.077.154-02","(92) 3655-5061","Rua Itatins","davi.julio.mendes@racml.com.br"))->setEnderecoEspecifico("Rodovia Angustura"),
            4 => new ClientePessoaJuridica("YAMADA","Heloisa Beatriz Ribeiro","F",18,"02/07/1998","45.858.671/0001-26","(42) 2798-7573","Rua Padre Anchieta","hbribeiro@igoralcantara.com.br"),
            5 => new ClientePessoaFisica("Valentina Fernanda Lima","F",23,"21/06/1993","804.596.864-88","(92) 3914-1285","Beco Comandante Norberto Won Gal","valentina.fernanda.lima@dcabr.org.br"),
            6 => (new ClientePessoaJuridica("CLARO","Emanuel Davi Alves","M",25,"21/06/1991","03.758.525/0001-89","(83) 3520-4401","Vila Almirante Barroso","emanuel_d_alves@projetemovelaria.com.br"))->setEnderecoEspecifico("Rua Bela Vista"),
            7 => new ClientePessoaFisica("Luna Pietra Stella Costa","F",20,"24/04/1996","713.526.330-86","(69) 2511-9631","Avenida dos Imigrantes 2137","luna_pietra@lencise.com"),
            8 => new ClientePessoaJuridica("Casas Bahia","Ryan André Nascimento","M",20,"18/04/1996","31.671.631/0001-66","(98) 2600-8200","Travessa Grajaú","ryan_a_nascimento@bemdito.com.br"),
            9 => new ClientePessoaFisica("Letícia Alana Mendes","F",30,"12/03/1986","516.496.683-25","(92) 2584-1650","Rua 3","lamendes@igly.com.br")

        );
        return $array;
    }
}