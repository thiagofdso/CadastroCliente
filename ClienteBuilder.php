<?php

/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 12/06/2016
 * Time: 10:14
 */

class ClienteBuilder
{
    public function getClientList(){
        $array = array(
            0 => new Cliente("Lucca Gustavo Pereira","M",22,"17/03/1994","281.070.842-84","(54) 2954-6029","Avenida Luís Pessoa da Silva Neto 1376","lucca_g_pereira@bemarius.com.br"),
            1 => new Cliente("Beatriz Mariane Isabelle Barros","F",22,"15/01/1994","950.206.693-69","(95) 2857-1632","Rua Nilo Melo","bmbarros@verdana.com.br"),
            2 => new Cliente("Luiz Heitor Otávio Araújo","M",27,"15/02/1989","058.288.013-09","(95) 2703-9613","Rua Maria das Graças Paulino","luiz_h_araujo@landovale.com.br"),
            3 => new Cliente("Davi Julio Luan Mendes","M",30,"10/03/1986","890.077.154-02","(92) 3655-5061","Rua Itatins","davi.julio.mendes@racml.com.br"),
            4 => new Cliente("Heloisa Beatriz Ribeiro","F",18,"02/07/1998","666.090.913-31","(42) 2798-7573","Rua Padre Anchieta","hbribeiro@igoralcantara.com.br"),
            5 => new Cliente("Valentina Fernanda Lima","F",23,"21/06/1993","804.596.864-88","(92) 3914-1285","Beco Comandante Norberto Won Gal","valentina.fernanda.lima@dcabr.org.br"),
            6 => new Cliente("Emanuel Davi Alves","M",25,"21/06/1991","125.005.347-15","(83) 3520-4401","Vila Almirante Barroso","emanuel_d_alves@projetemovelaria.com.br"),
            7 => new Cliente("Luna Pietra Stella Costa","F",20,"24/04/1996","713.526.330-86","(69) 2511-9631","Avenida dos Imigrantes 2137","luna_pietra@lencise.com"),
            8 => new Cliente("Ryan André Nascimento","M",20,"18/04/1996","847.571.945-79","(98) 2600-8200","Travessa Grajaú","ryan_a_nascimento@bemdito.com.br"),
            9 => new Cliente("Letícia Alana Mendes","F",30,"12/03/1986","516.496.683-25","(92) 2584-1650","Rua 3","lamendes@igly.com.br")

        );
        return $array;
    }
}