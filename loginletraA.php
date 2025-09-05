
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login letra A </title>
</head>
<body>
    <h2>Sistema de Login</h2>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'] ?? '';
        $senha   = $_POST['senha'] ?? '';
 
        if (!empty($senha) && preg_match('/^[Aa]/', $senha)) {
            echo "<p style='color:green;'>Acesso permitido! </p>";
        } else {
            echo "<p style='color:red;'>Acesso negado! A senha deve começar com a letra 'A' ou 'a'.</p>";
        }
    }
    ?>
 
    <form method="post">
        <label>Usuário:</label><br>
        <input type="text" name="usuario" required><br><br>
 
        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>
 
        <button type="submit">Entrar</button>
    </form>
</body>
</html>