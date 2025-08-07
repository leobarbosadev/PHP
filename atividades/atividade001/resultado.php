<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Resultado da Operação</h1>
    </header>

    <div class='caixa'>
        <p>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $opcao = htmlspecialchars($_POST['operadores']);
                    $num1 = htmlspecialchars($_POST['numero1']);
                    $num2 = htmlspecialchars($_POST['numero2']);
                    if (isset($opcao) && isset($num1) && isset($num2)){
                        switch ($opcao){
                            case 'soma': // Pega o value da option do meu formulario
                                $soma = $num1 + $num2;
                                echo "O resultado de <strong>$num1 + $num2 = $soma</strong>";
                                break;
            
                            case 'subtracao':
                                $subtracao = $num1 - $num2;
                                echo "O resultado de <strong>$num1 - $num2 = $subtracao</strong>";
                                break;
            
                            case 'miltiplicacao':
                                $multiplicacao = $num1 * $num2;
                                echo "O resultado de <strong>$num1 &times; $num2 = $multiplicacao</strong>";
                                break;
                            case 'divisao':
                                if($num2 == 0){
                                    echo 'Não existe divisão por 0';
                                } else{
                                    $divisao = $num1 / $num2;
                                    echo "O resultado de <strong>$num1 &divide; $num2 = $divisao</strong>";
                                }
                                break;
                            default:
                                echo 'Nenhum campo selecionado';
                                break;
                        };
                    }else{
                        echo 'NÃO EXECUTA';
                    }
                }
            ?>
        </p>

        <a href='index.php'>Voltar</a>
    </div>

    
</body>
</html>