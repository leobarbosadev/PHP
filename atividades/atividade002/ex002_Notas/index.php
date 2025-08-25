<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular média</title>
</head>

<body>
    <header>
        <h1>Calcular média</h1>
    </header>

    <main>
        <section>
            <form method="POST">
                <label for="nome">Digite um numero:</label>
                <input id="nome" name="nome_aluno" type="text" placeholder="Ex.: Antônio Gonçalves">

                <label for="nota1">Entre com a 1ª nota:</label>
                <input id="nota1" name="n1" type="number" placeholder="Ex.: 5" step="0.01">

                <label for="nota2">Entre com a 2ª nota:</label>
                <input id="nota2" name="n2" type="number" placeholder="Ex.: 5" step="0.01">

                <label for="nota3">Entre com a 3ª nota:</label>
                <input id="nota3" name="n3" type="number" placeholder="Ex.: 5" step="0.01">

                <label for="nota4">Entre com a 4ª nota:</label>
                <input id="nota4" name="n4" type="number" placeholder="Ex.: 5" step="0.01">

                <button type="submit">Calcular</button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>nome</th>
                        <th>média</th>
                        <th>situação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            include "public/processa.php";
                            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                                if(isset($_POST['nome_aluno']) && isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3']) && isset($_POST['n4'])){
                                    $nome = htmlspecialchars($_POST['nome_aluno']);
                                    $nota1 = (float) $_POST['n1'];
                                    $nota2 = (float) $_POST['n2'];
                                    $nota3 = (float) $_POST['n3'];
                                    $nota4 = (float) $_POST['n4'];
                                    // exibirResultados($nome, $nota1, $nota2, $nota3, $nota4);
                                }
                                    // Verifica se as notas foram passadas e, caso contrário, não faz nada ou exibe mensagem
                            if ($nota1 !== null && $nota2 !== null && $nota3 !== null && $nota4 !== null && $nome !== '') {
                                // Chama a função para processar os dados
                                exibirResultados($nome, $nota1, $nota2, $nota3, $nota4);
                            } else {
                                echo "Por favor, preencha todos os campos corretamente.";
                            }
                                                    }
                        ?>
                </tbody>
            </table>

        </section>
    </main>
</body>

</html>