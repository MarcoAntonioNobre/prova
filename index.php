<?php
include_once "./config/conexao.php";
include_once "./config/constantes.php";
include_once "./func/func.php";
?>
<!doctype html>
<html lang= "pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="row mt-3">
                <div class="col-md-12">
                    <form action="" name="buscaProduto" id="buscaProduto" method="post">
                        <label for="buscarProduto">Buscar produto:</label>
                        <input class="form-control me-2" type="search" placeholder="Buscar Produto" aria-label="Search" id="buscarProduto" name="buscarProduto">
                        <button class="btn btn-outline-success mt-2" type="submit" onclick="busca()">Buscar</button>
                    </form>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <img src="" alt="">
                    IMAGEM
                </div>
                <div class="col-md-8">
                    <div class="">
                        <label for="codigo" class="label-control">Código:</label>
                        <input type="text" name="codigo" id="codigo" class="form-control">
                    </div>

                    <div class="mt-2">
                        <label for="nomeProduto" class="label-control">Nome do produto:</label>
                        <input type="text" name="nomeProduto" id="nomeProduto" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <label for="qtdProduto" class="label-control">Quantidade:</label>
                    <input type="number" name="qtdProduto" id="qtdProduto" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="vlrUnitario" class="label-control">Valor unitário:</label>
                    <input type="number" name="vlrUnitario" id="vlrUnitario" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="vlrTotal" class="label-control">Total:</label>
                    <input type="number" name="vlrTotal" id="vlrTotal" class="form-control">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <button class="btn btn-success text-white" id="addProduto">Adicionar</button>
                    <button class="btn btn-danger text-white" id="cancelar">Cancelar</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">
                    Caixa
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped table-dark">
                        <thead>
                        <tr>
                            <th scope="col" width="10%">Nome<span class="mdi mdi-rename-box"></span></th>
                            <th scope="col" width="5%">QTD<span class="mdi mdi-rename-box"></span></th>
                            <th scope="col" width="8%">V.L.U<span class="mdi mdi-format-list-numbered-rtl"></span></th>
                            <th scope="col" width="8%">Total<span class="mdi mdi-format-list-numbered-rtl"></span></th>
                            <th scope="col" width="5%">Ações <span class="mdi mdi-database"></span></th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <select class="mb-2" id="mySelect" onchange="myFunction()">
                                <?php
                                $listarProduto = listarTabela('nome, preco', 'produto');
                                if ($listarProduto != 'Vazio') {
                                    foreach ($listarProduto as $itemProduto) {
                                        $nome = $itemProduto->nome;
                                        $preco = $itemProduto->preco;
                                        ?>
                                        <option value="<?php echo $nome ?>"><?php echo $nome ?></option>
                                        <?php
                                    }
                                } else {

                                ?>
                            </select>
                            <?php
                            $listarProduto = listarTabela('nome, preco', 'produto');
                            if ($listarProduto != 'Vazio') {
                            foreach ($listarProduto

                            as $itemProduto) {
                            $nome = $itemProduto->nome;
                            $preco = $itemProduto->preco;
                            ?>
                            <th scope="row"><?php echo $nome ?></th>
                            <td><?php echo $preco ?></td>
                        </tr>
                        <?php
                        }
                        } else {

                            ?>

                            <tr>
                                <th scope="row" colspan="6" class="text-center">CAIXA LIVRE</th>
                            </tr>
                            <?php
                        }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-body-secondary">
                    Mensagem de Total
                </div>
                <p id="demo"></p>
            </div>
        </div>
    </div>

</div>

<<<<<<< HEAD
=======


<script>
    function myFunction() {
        var x = document.getElementById("mySelect").value;
        document.getElementById("demo").innerHTML = "You selected: " + x;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>


<script src="./js/script.js"></script>
>>>>>>> 8740d807b1ffb226b369f2976c2ecfeb5680167c
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
<<<<<<< HEAD
<script src="./js/script.js"></script>
=======

>>>>>>> 8740d807b1ffb226b369f2976c2ecfeb5680167c
</body>
</html>

