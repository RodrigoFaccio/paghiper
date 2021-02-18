<?php
include 'conexao.php';

if ($_POST["tipo"] == 'cadastro') {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $descricao = $_POST["descricao"];
    $quantidade = $_POST["quantidade"];
    $id_item = $_POST["id_item"];
    $preco = $_POST["preco"];
    $pagamento = $_POST["pagamento"];





    $sql = "INSERT INTO usuarios (id,	email	,nome	,cpf,	telefone,	rua,	
    numero	,complemento	,bairro	,cidade	,estado, cep,ativo,descricao_produto,quantidade,item_id,preco,metodo,gerado)
 VALUES (null,'$email','$nome','$cpf','$telefone','$rua','$numero','$complemento',
 '$bairro','$cidade','$estado','$cep',1,'$descricao','$quantidade','$id_item','$preco','$pagamento',0)";



    $result = $conexao->query($sql);





    echo json_encode('foi');
} else  if ($_POST["tipo"] == 'gerarBoleto') {

    $sql = "SELECT * FROM usuarios WHERE gerado=0";
    $result = $conexao->query($sql);



    foreach ($result as $key) {
        $id = $key["id"];
        $metodo = $key['metodo'];
        if ($metodo == 'boleto') {
            $url = 'https://api.paghiper.com/transaction/create/';
        } else if ($metodo == 'pix') {
            $url = "https://pix.paghiper.com/invoice/create/";
        }


        $data = array(
            'apiKey' => 'apk_47854969-PpzlUaesoHJefMjoAeHbIvUXWGrVDLKT',
            'order_id' => '96874', // código interno do lojista para identificar a transacao.
            'payer_email' => $key['email'],
            'payer_name' => $key['nome'], // nome completo ou razao social
            'payer_cpf_cnpj' => $key['cpf'], // cpf ou cnpj
            'payer_phone' => $key['telefone'], // fixou ou móvel
            'payer_street' => $key['rua'],
            'payer_number' => $key['numero'],
            'payer_complement' => $key['complemento'],
            'payer_district' => $key['bairro'],
            'payer_city' => $key['cidade'],
            'payer_state' => $key['estado'], // apenas sigla do estado
            'payer_zip_code' => $key['cep'],
            'notification_url' => 'https://mysite.com/notification/paghiper/',
            'discount_cents' => '11', // em centavos
            'shipping_price_cents' => '25', // em centavos
            'shipping_methods' => 'PAC',
            'fixed_description' => true,
            'type_bank_slip' => 'boletoA4', // formato do boleto
            'days_due_date' => '5', // dias para vencimento do boleto
            'late_payment_fine' => '2', // Percentual de multa após vencimento.
            'per_day_interest' => true, // Juros após vencimento.
            'items' => array(
                array(
                    'description' => $key["descricao_produto"],
                    'quantity' => $key["quantidade"],
                    'item_id' => $key["item_id"],
                    'price_cents' => $key["preco"]
                ), // em centavos
                // em centavos
            ),
        );


        $data_post = json_encode($data);
        $url = $url;
        $mediaType = "application/json"; // formato da requisição
        $charSet = "UTF-8";
        $headers = array();
        $headers[] = "Accept: " . $mediaType;
        $headers[] = "Accept-Charset: " . $charSet;
        $headers[] = "Accept-Encoding: " . $mediaType;
        $headers[] = "Content-Type: " . $mediaType . ";charset=" . $charSet;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);

        $json = json_decode($result, true);
        // captura o http code
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($httpCode == 201) {

            // CÓDIGO 201 SIGNIFICA QUE O BOLETO FOI GERADO COM SUCESSO
            // Exemplo de como capturar a resposta json


            if ($metodo == 'boleto') {
                $id_transacao = $json['create_request']['transaction_id'];
                $url_pagamento = $json['create_request']['bank_slip']['url_slip'];
                $digitable_line = $json['create_request']['bank_slip']['digitable_line'];
                $sql = "UPDATE  usuarios set ativo = 1,gerado=1,url_boleto='$url_pagamento',id_transacao='$id_transacao' where id=$id";
                $result = $conexao->query($sql);
            } else if ($metodo == 'pix') {
                $id_transacao = $json['pix_create_request']['transaction_id'];
                $url_pagamento = $json['pix_create_request']['pix_code']['qrcode_image_url'];
                $sql = "UPDATE  usuarios set ativo = 1,gerado=1,url_boleto='$url_pagamento',id_transacao='$id_transacao' where id=$id";
                $result = $conexao->query($sql);
            }
        }
    }
    if ($result) {
        echo json_encode('foi');
    }
}