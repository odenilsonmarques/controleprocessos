<?php

require 'config.php';

$razaoSocialPessoaFisica = filter_input(INPUT_POST,'razaoSocialPessoaFisica');
$nomeFantasia = filter_input(INPUT_POST,'nomeFantasia');
$pessoaFisicaJuridica = filter_input(INPUT_POST,'pessoaFisicaJuridica');
$cnpjCpf = filter_input(INPUT_POST,'cnpjCpf');
$cep = filter_input(INPUT_POST,'cep');
$logradouro = filter_input(INPUT_POST,'logradouro');
$numero = filter_input(INPUT_POST,'numero');
$complemento = filter_input(INPUT_POST,'complemento');
$uf = filter_input(INPUT_POST,'uf');
$municipio = filter_input(INPUT_POST,'municipio');
$bairro = filter_input(INPUT_POST,'bairro');
$email = filter_input(INPUT_POST,'email');
$telefone = filter_input(INPUT_POST,'telefone');

if($razaoSocialPessoaFisica && $nomeFantasia)
{
    // && $pessoaFisicaJuridica && $cnpjCpf && $cep && $rua && $uf && $municipio && $bairro && $email && $telefone
    //vericando se ja existe um email antes de inserir o novo registro, estou usando o prepare pq é um campo especifco na busca
    // $queryBuscaPorEmail = $conection->prepare("SELECT * FROM tb_contribuinte WHERE email = :email");
    // $queryBuscaPorEmail->bindValue(':email',$email);
    // $queryBuscaPorEmail->execute();
    // if($queryBuscaPorEmail->rowCount() === 0)
    // {
        //apos fazer a verificação acima, preprara-se a query para fazer a inserção dos dados
        $queryBuscaPorEmail = $conection->prepare("INSERT INTO tb_contribuinte(razaoSocialPessoaFisica,nomeFantasia,pessoaFisicaJuridica,cnpjCpf,cep,logradouro,numero,complemento,uf,municipio,bairro,email,telefone) 
        VALUES (:razaoSocialPessoaFisica, :nomeFantasia, :pessoaFisicaJuridica, :cnpjCpf, :cep, :logradouro, :numero, :complemento, :uf, :municipio, :bairro, :email, :telefone)");

        

        $queryBuscaPorEmail->bindValue(':razaoSocialPessoaFisica',$razaoSocialPessoaFisica);
        $queryBuscaPorEmail->bindValue(':nomeFantasia', $nomeFantasia);
        $queryBuscaPorEmail->bindValue(':pessoaFisicaJuridica', $pessoaFisicaJuridica);
        $queryBuscaPorEmail->bindValue(':cnpjCpf', $cnpjCpf);
        $queryBuscaPorEmail->bindValue(':cep', $cep);
        $queryBuscaPorEmail->bindValue(':logradouro', $logradouro);
        $queryBuscaPorEmail->bindValue(':numero', $numero);
        $queryBuscaPorEmail->bindValue(':complemento', $complemento);
        $queryBuscaPorEmail->bindValue(':uf', $uf);
        $queryBuscaPorEmail->bindValue(':municipio', $municipio);
        $queryBuscaPorEmail->bindValue(':bairro', $bairro);
        $queryBuscaPorEmail->bindValue(':email', $email);
        $queryBuscaPorEmail->bindValue(':telefone', $telefone);
        $queryBuscaPorEmail->execute();
        
        header("Location:listaContribuinte.php");
        // var_dump($queryBuscaPorEmail);
        print_r($queryBuscaPorEmail);
}else{
    header("Location:home.php");
    // exit;
}









