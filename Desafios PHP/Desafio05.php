 <?php
// 1. Inicia a sessão
session_start();

// Define o tempo de vida em segundos (10 minutos * 60 segundos)
$tempo_limite = 600;

// 2. Verifica se existe o registro do último acesso na sessão
if (isset($_SESSION['ultimo_acesso'])) {
    
    // Calcula há quanto tempo a sessão está ativa
    $tempo_sessao = time() - $_SESSION['ultimo_acesso'];

    // 3. Verifica se o tempo atual ultrapassou o limite
    if ($tempo_sessao > $tempo_limite) {
        // Limpa e destrói a sessão
        session_unset();
        session_destroy();
        
        die("Erro: Sua sessão expirou por inatividade (limite de 10 minutos). Por favor, faça login novamente.");
    }
}

// 4. Atualiza a hora do último acesso para renovar o fôlego da sessão
$_SESSION['ultimo_acesso'] = time();

echo "Sessão ativa! Você tem 10 minutos de validade a cada interação.";
echo "<br>Tempo decorrido nesta sessão: " . (isset($tempo_sessao) ? $tempo_sessao : 0) . " segundos.";
?>