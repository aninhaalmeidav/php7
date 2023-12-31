<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //in_array() - true ou false para a existência do que está sendo procurado
    //array_search() - retorna o índice do valor pesquisado, caso ele exista
    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    $existe = in_array('Maçã', $lista_frutas);
    //true: 1 -> false: vazio
    
    if ($existe) { //true / false
        echo 'Sim, o valor pesquisado existe no array...';
    } else {
        echo 'Não, o valor pesquisado não existe no array!';
    }

    echo '<br/>';

    $existee = array_search('Uva', $lista_frutas);
    //se ñ existe -> null - vazio
    
    if ($existee != null) {
        echo 'Sim, o valor pesquisado existe no array...';
    } else {
        echo 'Não, o valor pesquisado não existe no array!';
    }

    echo '<hr/>';

    //pesquisa - array multidimensional
    $lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['João', 'Maria']];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo in_array('Uva', $lista_coisas['frutas']);
    echo in_array('Maria', $lista_coisas['pessoas']);
    ?>
</body>

</html>