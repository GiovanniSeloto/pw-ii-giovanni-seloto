<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $stmt = $conn->prepare("select * from tbproduto;");
    $stmt->execute(); 
?>

<table>
    <thead>
        <tr>
            <th>IDProduto</th>
            <th>Produto</th>
            <th>Valor</th>
            <th>Descrição</th>
        </tr>
  </thead>
  <tbody>    
    <?php
    $stmt->execute();
        while($row = $stmt->fetch()) {
            echo "<tr>";                               
                echo "<th scope='row'> $row[idProduto] </th>";                
                echo "<td> $row[Produto] </td>";
                echo "<td> $row[valor] </td>";
                echo "<td> $row[descricao] </td>";
            echo "</tr>";
        }
    ?>
  </tbody>
</table>

</body>
</html>

