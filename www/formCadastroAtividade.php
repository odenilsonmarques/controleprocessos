<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>cadastro de atividade</title>
</head>
<body>
    <header class="tituloPagina">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <h3 class="card-title text-center">Cadastro de Atividade</h3><br>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="recebeCadastroAtividade.php" method="POST">
                        <div class="card">
                            <div class="card-header"><strong>Dados da Atividade</strong></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="nomeDaAtividade" class="form-label">Nome da Atividade</label>
                                        <input type="text" class="form-control" name="nomeDaAtividade" id="nomeDaAtividade">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="codigoDaAtividade" class="form-label">Codigo da Atividade</label><br>
                                        <input type="text" class="form-control" name="codigoDaAtividade" id="codigoDaAtividade">
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