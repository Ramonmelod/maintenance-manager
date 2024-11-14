<?php
// Função para estabelecer a conexão com o banco de dados
function connection(){
    try {
        // Conexão PDO sem espaços extras e com tratamento de exceções
        $PDO = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        // Definir o modo de erro do PDO para exceções
        //$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $PDO;
    } catch (PDOException $e) {
        // Se houver um erro, exibe uma mensagem de erro
        die('Erro de conexão: ' . $e->getMessage());
    }
}
?>