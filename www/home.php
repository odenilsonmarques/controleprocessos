<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de processo</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <header>

    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="">
                        <div class="card">
                            <div class="card-header"><strong>Dados do Contribuinte</strong></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="razaoSocial_pessoaFisica" class="form-label">Nome da Razão Social / Pessoa Física</label>
                                        <input type="text" class="form-control" name="razaoSocial_pessoaFisica" id="razaoSocial_pessoaFisica">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="nome_fantasia" class="form-label">Nome Fantasia</label><br>
                                        <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="pessoa_fisicaJuridica" class="form-label">Pessoa Fiísica  / Jurídica</label>
                                        <select class="form-select" name="pessoa_fisicaJuridica" id="pessoa_fisicaJuridica">
                                            <option value="">Selecione</option>
                                            <option value="">Fisica</option>
                                            <option value="">Jurídica</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="cnpj_cpf" class="form-label">Cpf / Cnpj</label><br>
                                        <input type="text" class="form-control" name="cnpj_cpf" id="cnpj_cpf">
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
                                        <label for="rua" class="form-label">Rua</label><br>
                                        <input type="text" class="form-control" name="rua" id="rua">
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
                    </form>
                </div>
            </div>
        </div>
    </section>    
    <footer>

    </footer>
    <div class="container-fluid">
        <h1>teste 1</h1>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>