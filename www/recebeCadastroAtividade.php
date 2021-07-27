<?php
require 'config.php';

$nomeDaAtividade = filter_input(INPUT_POST,'nomeDaAtividade');
$codigoDaAtividade = filter_input(INPUT_POST,'codigoDaAtividade');

if($nomeDaAtividade){
    $queryCadastroDeAtividade = $conection->prepare("INSERT INTO tb_cnae(nomeDaAtividade, codigoDaAtividade)
    VALUES(:nomeDaAtividade, :codigoDaAtividade)");

    $queryCadastroDeAtividade->bindValue(':nomeDaAtividade',$nomeDaAtividade);
    $queryCadastroDeAtividade->bindValue(':codigoDaAtividade',$codigoDaAtividade);
    $queryCadastroDeAtividade->execute();

    header("Location:listaContribuinte.php");
}else{
    header("Location:formCadastroAtividade.php");
}