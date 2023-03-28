<html>
<head>
    <title>Projeto prático e Revisão.php</title>
</head>
<body>
    <?php
        $texto = "Curso na DIO";
        $numeros = 100;
        $array = array("PHP", "Java", "JavaScript", "C", "Python");
        date_default_timezone_set('America/Sao_Paulo');
        $datas = date("d/m/Y H:i:s");
    ?>
    <h4>
        Essa é uma variável do tipo string,
        para implementar uma variável do tipo string
        utilizamos aspas simples ('') ou duplas ("")
        :
        <?php
            echo $texto;
        ?> 
    </h4>
    <h4>
        Essa é uma variável do tipo números/integer,
        para implementar uma variável do tipo string
        utilizamos somente os números desta forma
        :
        <?php
            echo $numeros;
        ?>
    </h4>
    <h4>
        Essa é uma variável com um array, para implementar
        um array em uma variável utilizamos desta forma
        :
        <?php
            print_r($array)
        ?>
    </h4>
    <h4>
        Essa é uma variável do tipo datas, para implementar
        uma variável com datas utilizamos uma função própria do <?php
            print_r($array[0]);
        ?> desta forma:
        <?php
            print $datas;
        ?>
    </h4>
</body>
</html>