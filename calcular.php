<?php
    include('classes/calculadora.php');

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    $calculadora = new Calculadora();

    $calculadora->setNumero1($numero1);
    $calculadora->setNumero2($numero2);
    $calculadora->Somar();

    switch($operacao){
        case 'somar':
            $calculadora->Somar();
            break;
        case 'subtrair':
            $calculadora->Subtrair();
            break;
        case 'dividir':
            $calculadora->Dividir();
            break;
        case 'multiplicar':
            $calculadora->Multiplicar();
            break;
    }

    echo $calculadora->getTotal();
?>