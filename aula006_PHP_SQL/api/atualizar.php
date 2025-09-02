<?php
header("Content-Type: application/json");
include("../conexao/conexao.php");

$dados = json_decode(file_get_contents("php://input"), true);

/**
 * Extrai o valores id e concluida do array e força a conversão para inteiros,
 * evitando inserção de valores inválidos ou maliciosos.
 */
$id = (int)$dados["id"];
$concluida = (int)$dados["concluida"];

/**
 * Monta a instrução SQL que atualiza a coluna na tabela tarefas
 * para o registro cujo id corresponde ao informado.
 */
$sql = "UPDATE tarefas SET concluida = $concluida WHERE id = $id";
$conn->query($sql);

//Retorna uma reposta JSON ao cliente indicando que a operação foi concluída com sucesso.
echo json_encode(["status" => "ok"]);
?>