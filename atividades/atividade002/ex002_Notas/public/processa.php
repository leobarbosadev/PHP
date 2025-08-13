<?php
    function adicionarAlunos($nome, $nota1, $nota2, $nota3, $nota4){
       $alunos = [];

        // Se há dados ocultos (alunos anteriores), reconstrói o array
        if (isset($_POST['alunos'])) {
            $alunos = json_decode($_POST['alunos'], true);
        }

        // Se um novo aluno foi enviado
        if (isset($_POST['nome'], $_POST['nota1'], $_POST['nota2'])) {
            $nome = $_POST['nome'];
            $nota1 = floatval($_POST['nota1']);
            $nota2 = floatval($_POST['nota2']);
            $media = ($nota1 + $nota2) / 2;
            $situacao = $media >= 6 ? 'Aprovado' : 'Reprovado';

            // Adiciona o novo aluno à lista
            $alunos[] = [
                'nome' => $nome,
                'nota1' => $nota1,
                'nota2' => $nota2,
                'media' => $media,
                'situacao' => $situacao
            ];
        }
    }

?>