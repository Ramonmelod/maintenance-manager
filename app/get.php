
<?php

include './connect.php';

function getData(){
    try {
        // Realiza a consulta SQL
        $query = connection()->query('SELECT * FROM users');
        
        // Retorna os resultados como um array associativo
        return $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Se ocorrer algum erro na consulta, exibe a mensagem de erro
        die('Erro na consulta: ' . $e->getMessage());
    }
}

// Exibe os dados obtidos de forma legível
$data = getData();

// Verifica se há dados retornados
if ($data) {
    // Itera sobre os dados e imprime em formato legível
    foreach ($data as $row) {
        echo 'ID: ' . $row['id'] . ' - Nome: ' . $row['name'] . '<br>';
    }
} else {
    echo 'Nenhum dado encontrado.';
}
?>
