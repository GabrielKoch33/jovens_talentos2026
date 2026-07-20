<?php 
include_once 'funcoes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pizza do Mano</title>
</head>
<body>
    <h1>PIZZA DO MANO</h1>

    <form action="teste.php" method="post">

        <fieldset>
            <h3>Cliente</h3>

            <?php

            montaInput("nome", "text", 1);
            montaInput("sobrenome", "text", 1);
            montaInput("endereco", "text", 1);
            ?>

            <label for="numendereco">Número do endereço</label><br>
            <input type="number" name="numendereco" id="numendereco" min="0" max="9999"><br><br>

            <?php
            montaInput("bairro", "text", 1);
            montaInput("cidade", "text", 1);
            montaInput("telefone", "tel", 1);
            montaInput("email", "email", 1);
            ?>
        </fieldset>

        <br>

        <fieldset>
            <h3>Pedido</h3>

            <h4>Tamanho</h4>
            <?php
            $aTamanhos = ["Pequena", "Média", "Grande", "Gigante"];
            montaRadio($aTamanhos, "tamanho", 'false', null);
            ?>

            <h4>Sabores (escolha até 4)</h4>
            <?php
            $aSabores = ["4 Queijos", "Pepperoni", "Strogonoff de Carne", "Mexicana",
                         "Calabresa", "Chocolate Branco", "Chocolate Preto"];
            montaCheckbox($aSabores, "sabor[]", 'false', null);
            ?>

            <h4>Borda</h4>
            <?php
            $aBordas = ["Requeijão", "Chocolate", "Sem Borda"];
            montaRadio($aBordas, "borda", 'false', "Sem Borda");
            ?>

            <br><br>
            <label for="observacao"><b>Observações</b></label><br>
            <textarea name="observacao" id="observacao" cols="30" rows="5" maxlength="100" placeholder="Até 100 caracteres..."></textarea>
        </fieldset>

        <br>

        <fieldset>
            <h3>Pagamento</h3>
            <?php
            $aPagamentos = ["Dinheiro", "Cartão", "Cheque"];
            montaRadio($aPagamentos, "pagamento", 'false', null);
            ?>
        </fieldset>

        <br>
        <button type="submit" name="envia" id="envia">Enviar Pedido</button>
    </form>
</body>
</html>