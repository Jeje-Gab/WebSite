<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'imobiliaria';
    $conn = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(!$conn){
        echo "Conexão falhou";
    }else {
        echo "Deu Certo";
    }
?>