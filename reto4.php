<?php
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $input3 = $_POST['input3'];

    if ($input1 == "clave8" && $input2 == "clave9" && $input3 == "clave10") {
        header("Location: congratulations.php");
        exit();
    } else {
        $error = "Intenta con 'clave8', 'clave9' y 'clave10'.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 4</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Reto 4</h1>
        <form method="post">
            <input type="text" name="input1" placeholder="Input 1" required>
            <input type="text" name="input2" placeholder="Input 2" required>
            <input type="text" name="input3" placeholder="Input 3" required>
            <button type="submit">Enviar</button>
        </form>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>