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

    $op1 = (isset($_GET['op1'])) ? trim($_GET['op1']) : null;
    $op2 = (isset($_GET['op2'])) ? trim($_GET['op2']) : null;
    $op = (isset($_GET['op'])) ? trim($_GET['op']) : null;

    if (isset($op1, $op2, $op)) {
        try {
            $res = calcular_resultado($op1, $op2, $op);
            mostrar_resultado($op1, $op2, $op, $res);
        } catch (Exception $e) {
            mostrar_errores([$e->getMessage()]);
        }
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
