<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    require 'auxiliar.php';

    $error = [];
    if (isset($_GET['op1'])) {
        $op1 = trim($_GET['op1']);
    } else {
        $error[] = 'Falta el parámetro op1';
    }
    if (isset($_GET['op2'])) {
        $op2 = trim($_GET['op2']);
    } else {
        $error[] = 'Falta el parámetro op2';
    }
    if (isset($_GET['op'])) {
        $op = trim($_GET['op']);
    } else {
        $error[] = 'Falta el parámetro op';
    }
    if (empty($error)) {
        $res = calcular_resultado($op1, $op2, $op);
        mostrar_resultado($op1, $op2, $op, $res);
    } else {
        mostrar_errores($error);
    }
    ?>

    <form action="" method="get">
        <div>
            <label>
                Primer operando:
                <input type="text" name="op1">
            </label>
        </div>
        <div>
            <label>
                Segundo operando:
                <input type="text" name="op2">
            </label>
        </div>
        <div>
            <label>
                Operación:
                <input type="text" name="op">
            </label>
        </div>
        <button type="submit">Calcular</button>
    </form>
</body>

</html>
