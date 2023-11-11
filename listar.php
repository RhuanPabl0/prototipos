<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
</head>
<body>
    <header class="header">
        <h1>Protótipos</h1>
    </header>
    <main>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data e Hora</th>
                    <th>Tempo</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "conexao.php";

                    // Consultar dados da tabela sensor
                    $listar = "SELECT * FROM sensor;";
                    $dados = mysqli_query($conexao, $listar);

                    while($linha = mysqli_fetch_assoc($dados)) {
                        $id = $linha['id'];
                        $tempo = $linha['tempo'];
                        $data = $linha['dataehora'];
                        $data = formata_data($data);

                        echo "<tr>";
                        echo "<td class='id'>$id</td>"; 
                        echo "<td class='dataehora'>$data</td>";
                        echo "<td class='tempo'>$tempo</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>




        