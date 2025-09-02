<?php
header("Content-Type: application/json");
include("../conexao/conexao.php");

//Recebe os dados do corpo da requisição
$dados = json_decode(file_get_contents("php://input"), true);
/**
 * Extrai o valores id e concluida do array e força a conversão para inteiros,
 * evitando inserção de valores inválidos ou maliciosos.
 */
$id = (int)$dados["id"];

/*Extrai o novo titulo e aplica real_escape_string, que escapa
caracteres especiais para evitar injeção SQL.*/
$sql = "UPDATE tarefas SET titulo = $titulo WHERE id = $id";

//Executa o comando SQL no banco de dados
$conn->query($sql);

//Retorna uma reposta JSON ao cliente indicando que a operação foi concluída com sucesso.
echo json_encode(["status" => "ok"]);
?>