<?php

require 'config.php';

$razaoSocial_pessoaFisica = filter_input(INPUT_POST,'razaoSocial_pessoaFisica');
$nome_fantasia = filter_input(INPUT_POST,'nome_fantasia');
$pessoa_fisicaJuridica = filter_input(INPUT_POST,'pessoa_fisicaJuridica');
$cnpj_cpf = filter_input(INPUT_POST,'cnpj_cpf');
$cep = filter_input(INPUT_POST,'cep');
$rua = filter_input(INPUT_POST,'rua');
$numero = filter_input(INPUT_POST,'numero');
$complemento = filter_input(INPUT_POST,'complemento');
$uf = filter_input(INPUT_POST,'uf');
$municipio = filter_input(INPUT_POST,'municipio');
$bairro = filter_input(INPUT_POST,'bairro');
$email = filter_input(INPUT_POST,'email');
$telefone = filter_input(INPUT_POST,'telefone');

if($razaoSocial_pessoaFisica && $nome_fantasia && $pessoa_fisicaJuridica && $cnpj_cpf && $cep && $rua && $uf && $municipio && $bairro && $email && $telefone )
{
    //vericando se ja existe um email antes de inserir o novo registro, estou usando o prepare pq é um campo especifco na busca
    $queryBuscaPorEmail = $conection->prepare("SELECT * FROM tb_contribuinte WHERE email = :email");
    $queryBuscaPorEmail->bindValue(':email',$email);
    $queryBuscaPorEmail->execute();
    if($queryBuscaPorEmail->rowCount() === 0)
    {
        //apos fazer a veriicação acima, preprara-se a query para fazer a inserção dos dados
        $queryBuscaPorEmail = $conection->prepare("INSERT INTO tb_contribuinte(razaoSocial_pessoaFisica, nome_fantasia, 
        pessoa_fisicaJuridica, cnpj_cpf, cep, rua, numero, complemento, uf, municipio, bairro, email, telefone) 
        values(:razaoSocial_pessoaFisica, :nome_fantasia, :pessoa_fisicaJuridica, :cnpj_cpf, :cep, :rua, :numero, :complemento, 
        :uf, :municipio, :bairro, :email, :telefone)");
        $queryBuscaPorEmail->bindValue(':razaoSocial_pessoaFisica',$razaoSocial_pessoaFisica);
        $queryBuscaPorEmail->bindValue(':nome_fantasia', $nome_fantasia);
        $queryBuscaPorEmail->bindValue(':pessoa_fisicaJuridic', $pessoa_fisicaJuridica);
        $queryBuscaPorEmail->bindValue(':cnpj_cpf', $cnpj_cpf);
        $queryBuscaPorEmail->bindValue(':cep', $cep);
        $queryBuscaPorEmail->bindValue(':rua', $rua);
        $queryBuscaPorEmail->bindValue(':numero', $numero);
        $queryBuscaPorEmail->bindValue(':complemento', $complemento);
        $queryBuscaPorEmail->bindValue(':uf', $uf);
        $queryBuscaPorEmail->bindValue(':municipio', $municipio);
        $queryBuscaPorEmail->bindValue(':bairro', $bairro);
        $queryBuscaPorEmail->bindValue(':email', $email);
        $queryBuscaPorEmail->bindValue(':telefone', $telefone);
        $queryBuscaPorEmail->execute();
        header("Location:aviso.php");
        exit;
    }else{
        header("Location:home.php");
        exit;
    }
}else{
    header("Location:home.php");
    exit;
}









