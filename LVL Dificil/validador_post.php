<?php

/**
 * Valida se os campos obrigatórios estão presentes e não vazios.
 * * @param array $dados O array a ser validado (ex: $_POST)
 * @param array $obrigatorios Lista com as chaves obrigatórias
 * @return array Retorna um array com os erros encontrados
 */
function validarCampos($dados, $obrigatorios) {
    $erros = [];

    foreach ($obrigatorios as $campo) {
        // Verifica se a chave existe e se o valor não é apenas espaços em branco
        if (!isset($dados[$campo]) || trim($dados[$campo]) === '') {
            $erros[] = "O campo '$campo' é obrigatório.";
        }
    }

    return $erros;
}

// --- Simulação de uso ---

// Simulando um $_POST incompleto
$_POST = [
    "nome" => "João Silva",
    "email" => "", // Campo vazio
    "senha" => "123456"
    // "telefone" está faltando completamente
];

$camposObrigatorios = ["nome", "email", "senha", "telefone"];

$listaDeErros = validarCampos($_POST, $camposObrigatorios);

// 3. Verificação final
if (empty($listaDeErros)) {
    echo "Sucesso: Todos os campos foram preenchidos corretamente!";
} else {
    echo "### Erros de Validação ###\n";
    foreach ($listaDeErros as $erro) {
        echo "- $erro\n";
    }
}

?>