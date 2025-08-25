<?php
    function exibirResultados($nome, $nota1, $nota2, $nota3, $nota4){
    // $alunos = [];
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if($media < 6){
        $situacao = 'Reprovado';
    } else if ($media == 6){
        $situacao = 'Recuperação';
    } else{
       $situacao = 'Aprovado';
    }

    //Saida formatada em uma tabela
    echo "<table border = 1>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Média</th>
                    <th>Situação</th>
                </tr>
            <tbody>
                <tr>
                    <td>$nome</td>
                    <td>$media</td>
                    <td>$situacao</td>
                </tr>
            </tbody>
        </tabel>";    
    }
?>