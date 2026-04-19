<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ConectaJá Consultoria</title>
</head>
<body>
    <h1>ConectaJá Consultoria</h1>
    <form action="recomenda_equipamento.php" method="POST">
        <label for="ambiente">Tamanho do Ambiente: </label>
        <select name="ambiente" id="ambiente" required>
            <option value="">-- Selecione --</option>
            <option value="residencial">Casa / Apartamento</option>
            <option value="pequeno_escritorio">Pequeno Escritório (Até 15)</option>
            <option value="data_center">Data Center Corporativo</option>
        </select>
        <br><br>
        <button type="submit">Ver Recomendação</button>
    </form>
</body>
</html>

<?php
$ambiente = $_POST['ambiente'] ?? '';

$titulo = '';
$equipamento = '';
$descricao = '';

switch ($ambiente) {
    case 'residencial':
        $titulo = 'Residencial';
        $equipamento = 'Roteador Wireless (SOHO)';
        $descricao = 'Para ambientes residenciais, um roteador Wi-Fi padrão é suficiente para conectar smartphones, TVs e notebooks.';
        break;

    case 'pequeno_escritorio':
        $titulo = 'Pequeno Escritório';
        $equipamento = 'Switch Gerenciável de 24 Portas';
        $descricao = 'Para um escritório, recomendamos o uso de um Switch para conectar os computadores via cabo, garantindo estabilidade e segurança na rede local (LAN).';
        break;

    case 'data_center':
        $titulo = 'Datacenter';
        $equipamento = 'Roteador de Borda e Switch Layer 3';
        $descricao = 'Para Data Centers, é necessária uma infraestrutura robusta com equipamentos de alta capacidade para lidar com grande tráfego de dados e roteamento avançado.';
        break;

    default:
        $titulo = 'Erro';
        $equipamento = 'Ambiente não reconhecido em nosso banco de dados.';
        $descricao = 'Por favor, selecione uma das opções válidas.';
        break;
}
?>