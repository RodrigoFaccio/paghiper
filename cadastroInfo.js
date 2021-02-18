function cadastrar() {
    var email = document.getElementById('email').value;
    var nome = document.getElementById('nome').value;
    var cpf = document.getElementById('cpf').value;
    var telefone = document.getElementById('telefone').value;
    var rua = document.getElementById('rua').value;
    var numero = document.getElementById('numero').value;
    var complemento = document.getElementById('complemento').value;
    var bairro = document.getElementById('bairro').value;
    var cidade = document.getElementById('cidade').value;
    var estado = document.getElementById('estado').value;
    var cep = document.getElementById('cep').value;
    var descricao = document.getElementById('descricao').value;
    var quantidade = document.getElementById('quantidade').value;
    var id_item = document.getElementById('id_item').value;
    var preco = document.getElementById('preco').value;
    var pagamento = document.getElementById('pagamento').value;




    $.ajax({
        url: "cadastro-classe.php",
        type: "POST",
        data: "tipo=cadastro&nome=" + nome + "&email=" + email + "&cpf=" + cpf + "&telefone=" + telefone + "&rua=" + rua + "&numero=" + numero +
            "&complemento=" + complemento + "&bairro=" + bairro + "&cidade=" + cidade + "&estado=" + estado + "&cep=" + cep +
            "&descricao=" + descricao + "&quantidade=" + quantidade + "&id_item=" + id_item + "&preco=" + preco + "&pagamento=" + pagamento,
        dataType: "json"
    }).done(function (resposta) {
        alert('Cadastrado com sucesso ');
        console.log(resposta);


    })
}

function gerarBoleto() {
    $.ajax({
        url: "cadastro-classe.php",
        type: "POST",
        data: "tipo=gerarBoleto",
        dataType: "json"
    }).done(function (resposta) {
        alert('Todos os Pagamentos foram gerados ')
        console.log(resposta);


    }).fail(function (jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);
    }).always(function () {
        console.log('ok');
    });

}