<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de pagamentos com criptoativos para produtos e serviços.">
    <meta name="keywords" content="criptomoedas, pagamentos, Bitcoin, Ethereum, produtos, serviços, blockchain">
    <title>Pagamento com Criptomoedas - Estabelecimentos Locais</title>

    <!-- Estilos externos -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" />

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2d3436;
            padding: 20px;
            color: white;
            text-align: center;
        }

        header h1 {
            font-size: 2.5em;
        }

        nav {
            text-align: center;
            margin: 20px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
        }

        nav a:hover {
            color: #00b894;
        }

        /* Seção de Produtos */
        .product-section {
            padding: 30px;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .product-section h2 {
            font-size: 2em;
            color: #2d3436;
            margin-bottom: 20px;
        }

        .products {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .product {
            background-color: white;
            border-radius: 10px;
            width: 250px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            text-align: center;
        }

        .product img {
            width: 100%;
            border-radius: 8px;
        }

        .product h3 {
            font-size: 1.5em;
            margin: 15px 0;
        }

        .product p {
            font-size: 1.1em;
            color: #666;
        }

        .product .price {
            font-size: 1.4em;
            color: #00b894;
            margin-bottom: 20px;
        }

        .product select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Seção de Pagamento */
        .payment-section {
            padding: 30px;
            background-color: #f0f0f0;
            text-align: center;
        }

        .payment-section h2 {
            font-size: 2em;
            color: #2d3436;
            margin-bottom: 20px;
        }

        .payment-form {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .payment-form h3 {
            margin-bottom: 15px;
        }

        .payment-form label {
            font-size: 1.2em;
        }

        .payment-form select, .payment-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .payment-form .total {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .payment-form .crypto-price {
            color: #00b894;
        }

        .payment-form button {
            padding: 15px 30px;
            background-color: #00b894;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1.2em;
            cursor: pointer;
        }

        button:hover {
            background-color: #019973;
        }

        footer {
            background-color: #2d3436;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <h1>Pagamento com Criptomoedas</h1>
    </header>

    <!-- Produtos -->
    <section class="product-section">
        <h2>Selecione um Produto</h2>
        <div class="products">
            <div class="product">
                <img src="img/hamburguer.jpg" alt="Hamburguer artesanal">
                <h3>Hambúrguer Artesanal</h3>
                <p>Delicioso hambúrguer com ingredientes frescos.</p>
                <p class="price">R$ 29,90</p>
                <select>
                    <option value="1">Quantidade: 1</option>
                    <option value="2">Quantidade: 2</option>
                    <option value="3">Quantidade: 3</option>
                </select>
            </div>

            <div class="product">
                <img src="img/pizza.jpg" alt="Pizza de Calabresa">
                <h3>Pizza de Calabresa</h3>
                <p>Saborosa pizza com calabresa e queijo derretido.</p>
                <p class="price">R$ 39,90</p>
                <select>
                    <option value="1">Quantidade: 1</option>
                    <option value="2">Quantidade: 2</option>
                    <option value="3">Quantidade: 3</option>
                </select>
            </div>
        </div>
    </section>

    <!-- Pagamento com Criptomoedas -->
    <section class="payment-section">
        <h2>Escolha a Criptomoeda para Pagamento</h2>
        <div class="payment-form">
            <h3>Selecione a Moeda</h3>
            <label for="crypto">Criptoativo:</label>
            <select id="crypto">
                <option value="btc">Bitcoin (BTC)</option>
                <option value="eth">Ethereum (ETH)</option>
                <option value="ltc">Litecoin (LTC)</option>
            </select>

            <h3>Resumo do Pagamento</h3>
            <p class="total">Total em Reais: <span id="total-brl">R$ 69,80</span></p>
            <p class="total">Total em Cripto: <span class="crypto-price">0.00123 BTC</span></p>

            <button>Finalizar Pagamento</button>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2023 - Todos os direitos reservados. Pagamentos com Criptoativos.</p>
    </footer>

</body>
</html>
