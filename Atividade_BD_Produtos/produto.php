<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section>
        <form action="salvarprodutos.php" method="post">
            <div>
                <label> Produto: </label>
                <input type="text" name="txProduto" />
            </div>

            <div>
                <label> Valor: </label>
                <input type="text" name="txValor" />
            </div>

            <div>
                <label> Descrição: </label>
                <input type="text" name="txDescricao" />
            </div>

            <div>                
                <input type="submit" value="Enviar" />
            </div>

        </form>
    </section>

    
</body>
</html>