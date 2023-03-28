<?php

    /* Variáveis */

    $valorDia = 80;
    $gorjetas = 40;
    $diaria = $valorDia + $gorjetas;

    echo "Segunda-feira: $diaria<br>";

    $gorjetas = 15;
    $diaria = $valorDia + $gorjetas;

    echo "Terça-feira: $diaria<br>";

    /* Constantes */

    define("valorDia", "80");
    define("gorjetas", "40");

    echo valorDia + gorjetas;

    /* Strings 

    $a = "<br> Curso de PHP";

    echo $a;

    $h1 = "<h1> Texto em h1";
    $h2 = "<h2> Texto em h1";
    $h3 = "<h3> Texto em h1";
    $h4 = "<h4> Texto em h1";
    $h5 = "<h5> Texto em h1<br>";

    echo $h1;
    echo $h2;
    echo $h3;
    echo $h4;
    echo $h5, "<br>"; */

    /* Integers/números */

    $valorDia = 80;
    $gorjeta = 15;
    $combustivel = -30;

    $x = $valorDia + $gorjeta + $combustivel;
    echo "<br>";
    var_dump($x);

    /* Datas */

    echo "<br>";

    $data = date("d/m/Y");
    echo $data;

    echo "<br>";

    date_default_timezone_set('America/Sao_Paulo');
    echo date("H:i:s");

    echo "<br>";

    $date = date("d/m/Y H:i:s");
    echo $date;

    /* Arrays */

    echo "<br>";

    $cursos = array("PHP", "Java", "C", "JavaScript", "Python");
    print_r($cursos[4]);

    /* Echo e Print */

    echo "<br>";

    print "Exibe na tela apenas uma String\n";
    print "<br>";
    echo "Exibir na tela echo<br>";
    echo "Exibir dois echos<br>", "echo de novo";

    /* escopo local e global */

    echo "<br>";

    $a = 50;

    function soma(){
        global $a;
        $calc = 10 + 40 + $a;
        return $calc;
    }
        
    echo soma();

?>