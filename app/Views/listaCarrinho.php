<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (count($carrinho) == 0) {
            echo '<h1>Carrinho vazio</h1>';
        } else { 
    ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Produto</th>
                    <th>Fabricante</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for ($i = 0; $i < count($carrinho); $i++) {
                        $p = $carrinho[$i];
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
                                <?= $p->quantidade?>
                            </td>
                        </tr>
                    <?php 
                        }
                    ?>
            </tbody>
        </table>    
    <?php 
        }
    ?>

</body>
</html>