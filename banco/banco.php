<?php

$conexao = mysql_connect("localhost", "root", "");
$banco = mysql_select_db("noticias");

$titulo = $_POST["titulo"];
$conteudo = $_POST["conteudo"];
$data = $_POST["data"];

if ($data != "") //testando se a variavel data é diferente de vazia
{
    $sql = "ALTER TABLE `contato` CHANGE `Email` `Email` INT(40) NULL DEFAULT NULL;";
    var_dump($sql);
} else { // se for vazia coloca a data atual atraves do banco de dados
    $sql = "ALTER TABLE `contato` CHANGE `Email` `Email` INT(40) NULL DEFAULT NULL;";
    var_dump($sql);
}

$insert = mysql_query($sql);
if ($insert) {
    echo "Noticia inserida com sucesso!";
} else {
    echo "Erro durante a inserção da notícia. Verifique os dados!" . mysql_error();
}

?>







$sql = "ALTER TABLE `contato` CHANGE `Email` `Email` INT(40) NULL DEFAULT NULL;";
