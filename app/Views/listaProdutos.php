<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Pesquisar produto">
        <button type="submit">Pesquisar</button>
    </form>
    <form action="<?= $GLOBALS['baseURL']?>/pedidos/carrinho" method="post">
        <input type="text" style="display: none" id="carrinho_storage" name="carrinho_storage">
        <button type="submit">
            <i class="bi bi-basket2-fill"></i>
            <p id="carrinho"></p>
        </button>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</td>
                <th>Produto</td>
                <th>Fabricante</td>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            for ($i = 0; $i < count($pedidos); $i++) {
                $p = $pedidos[$i];
            ?>
                <tr>
                    <td>
                        <?= $p->codigo?>
                    </td>
                    <td>
                        <?= $p->produto?>
                    </td>
                    <td>
                        <?= $p->fabricante?>
                    </td>
                    <td>
                        <button onclick="adicionarNoCarrinho(<?= $p->codigo?>)">
                            <i class="bi bi-plus-circle"></i>
                        </button>
                    </td>
                </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
</body>
<script>
    const carrinho = []
    const adicionarNoCarrinho = (codigo) => {
        console.log(codigo)
        carrinho.push(codigo);
        console.log(carrinho)
        document.getElementById('carrinho_storage').value = JSON.stringify(carrinho)
        document.getElementById('carrinho').innerHTML = carrinho.length
    }
</script>
</html>