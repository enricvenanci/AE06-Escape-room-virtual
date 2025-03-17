<?php
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];

    if ($input1 == "clave1" && $input2 == "clave2") {
        header("Location: reto2.php");
        exit();
    } else {
        $error = "Intenta con 'clave1' y 'clave2'.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Reto 1</h1>
        <form method="post">
            <input type="text" name="input1" placeholder="Input 1" required>
            <input type="text" name="input2" placeholder="Input 2" required>
            <button type="submit">Enviar</button>
        </form>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>