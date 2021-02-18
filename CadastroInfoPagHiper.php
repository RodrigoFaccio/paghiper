<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="col">

        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="email">

            <label for="exampleInputPassword1">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome">
            <label for="exampleInputPassword1">Cpf</label>
            <input type="text" class="form-control" name="cpf" id="cpf">
            <label for="exampleInputPassword1">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone">
            <label for="exampleInputPassword1">Rua</label>
            <input type="text" class="form-control" name="rua" id="rua">
            <label for="exampleInputPassword1">Numero</label>
            <input type="text" class="form-control" name="numero" id="numero">
            <label for="exampleInputPassword1">Complemento</label>
            <input type="text" class="form-control" name="complemento" id="complemento">
            <label for="exampleInputPassword1">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro">
            <label for="exampleInputPassword1">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade">
            <label for="exampleInputPassword1">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado">
            <label for="exampleInputPassword1">Cep</label>
            <input type="text" class="form-control" name="cep" id="cep">
            <label for="exampleInputPassword1">Descrição Produto</label>
            <input type="text" class="form-control" name="cep" id="descricao">
            <label for="exampleInputPassword1">Quantidade</label>
            <input type="text" class="form-control" name="cep" id="quantidade">
            <label for="exampleInputPassword1">Id item</label>
            <input type="text" class="form-control" name="cep" id="id_item">
            <label for="exampleInputPassword1">Preço em centavos</label>
            <input type="text" class="form-control" name="cep" id="preco">
            <label for="exampleFormControlSelect1"> Pagamento</label>
            <select class="form-control" id="pagamento">
                <option value="pix">Selecione</option>

                <option value="pix">Pix</option>
                <option value="boleto">boleto</option>

            </select>



        </div>


        <button type="submit" onclick="cadastrar()" class="btn btn-primary">Cadastrar Dados</button>
        <a href="gerarPagamentos.php" class="btn btn-primary">Gerar pagamentos</a>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="jquery.js"></script>
    <script src="cadastroInfo.js"></script>

</body>

</html>