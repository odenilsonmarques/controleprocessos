<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>cadastro de processo</title>
</head>
<body>
    <header class="tituloPagina">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <h3 class="card-title text-center">Cadastro de Contribuinte</h3><br>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="recebeCadastroContribuinte.php" method="POST">
                        <div class="card">
                            <div class="card-header"><strong>Dados do Contribuinte</strong></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="razaoSocialPessoaFisica" class="form-label">Nome da Razão Social / Pessoa Física</label>
                                        <input type="text" class="form-control" name="razaoSocialPessoaFisica" id="razaoSocialPessoaFisica">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="nomeFantasia" class="form-label">Nome Fantasia</label><br>
                                        <input type="text" class="form-control" name="nomeFantasia" id="nomeFantasia">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="pessoaFisicaJuridica" class="form-label">Pessoa Fiísica  / Jurídica</label>
                                        <select class="form-select" name="pessoaFisicaJuridica" id="pessoaFisicaJuridica">
                                            <option value="">Selecione</option>
                                            <option value="Fisica">Fisica</option>
                                            <option value="Juridica">Jurídica</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="cnpjCpf" class="form-label">Cpf / Cnpj</label><br>
                                        <input type="text" class="form-control" name="cnpjCpf" id="cnpjCpf">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"><strong>Logradouro</strong></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="cep" class="form-label">Cep</label>
                                        <input type="text" class="form-control" name="cep" id="cep">
                                    </div>
                                    <div class="col-sm-8">
                                        <label for="logradouro" class="form-label">Rua</label><br>
                                        <input type="text" class="form-control" name="logradouro" id="logradouro">
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="numero" class="form-label">Numero</label><br>
                                        <input type="text" class="form-control" name="numero" id="numero">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="complemento" class="form-label">Complemento</label>
                                        <input type="text" class="form-control" name="complemento" id="complemento">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="uf" class="form-label">Estado</label>
                                        <input type="text" class="form-control" name="uf" id="uf">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="municipio" class="form-label">Municipio</label><br>
                                        <input type="text" class="form-control" name="municipio" id="municipio">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="bairro" class="form-label">Bairro</label><br>
                                        <input type="text" class="form-control" name="bairro" id="bairro">
                                    </div>
                                </div><br>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"><strong>Contatos</strong></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="telefone" class="form-label">Telefone</label><br>
                                        <input type="text" class="form-control" name="telefone" id="telefone">
                                    </div>
                                </div><br>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-danger mb-3">Cancelar Cadastro</button>
                                <button type="submit" class="btn btn-success mb-3">Realizar Cadastro</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>    
    <footer></footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>