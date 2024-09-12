<?php
session_start();
include 'admin/db_connect.php';

// Verificar se o pedido_id está disponível na sessão
$pedido_id = isset($_SESSION['pedido_id']) ? $_SESSION['pedido_id'] : null;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Pagamento</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container mt-4">
        <h2>Confirmação de Pagamento</h2>

        <?php if ($pedido_id): ?>
            <p>Seu pedido com ID <?php echo htmlspecialchars($pedido_id); ?> foi confirmado com sucesso.</p>
        <?php else: ?>
            <p>Seu pagamento ainda não foi confirmado. Por favor, aguarde.</p>
        <?php endif; ?>
    </div>
</body>
</html>
