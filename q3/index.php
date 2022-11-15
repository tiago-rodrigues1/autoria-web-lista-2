<?php 
    $pedidos = [
        [
            "produto" => "Saco de cimento",
            "preco" => 50.00,
            "quantidade" => 3
        ],
        [
            "produto" => "Brita",
            "preco" => 60.00,
            "quantidade" => 1
        ],
        [
            "produto" => "Saco de areia",
            "preco" => 20.00,
            "quantidade" => 5
        ]
    ];

    $total = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Construtor</title>

    <link rel="stylesheet" href="./q3.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="perfil">
            <img src="https://github.com/tiago-rodrigues1.png" alt="Imagem de Tiago Rodrigues">
            <h4>Olá, Tiago</h4>
        </div>
    </header>
    <main>
        <aside>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Orçamentos</a>
                </li>
                <li>
                    <a href="#">Contato</a>
                </li>
                <li>
                    <a href="#">Editar perfil</a>
                </li>
            </ul>
        </aside>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($pedidos as &$pedido) { 
                    ?>
                        <tr>
                                <td><?= $pedido["produto"] ?></td>
                                <td><?= number_format($pedido["preco"], 2, ",", "") ?></td>
                                <td><?= $pedido["quantidade"] ?></td>
                                <td>
                                    <?php 
                                        $subtotal = $pedido["preco"] * $pedido["quantidade"];
                                        $total += $subtotal;

                                        echo number_format(($subtotal), 2, ",", ".");
                                    ?>
                                </td>
                        </tr> 
                    <?php
                        }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Total: R$ <?= number_format(($total), 2, ",", ".") ?></td>
                    </tr>
                </tfoot>
            </table>
        </section>
    </main>
</body>
</html>