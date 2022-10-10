<?php
/**
 * @author Ricardo Pérez López
 * @copyright Copyright (c) 2022 Ricardo Pérez López
 * @license https://www.gnu.org/licenses/gpl.txt
 */

/**
 * Calcula el resultado de hacer la operación de $oper sobre
 * los argumentos $oper1 y $oper2.
 *
 * @param  float  $oper1 El primer operando.
 * @param  float  $oper2 El segundo operando.
 * @param  string $oper  El operador
 *                       (valores válidos: '+', '-', '*', '/').
 * @return float         El resultado del cálculo.
 * @throws Exception     Si la operación es incorrecta.
 */
function calcular_resultado(float $oper1, float $oper2, string $oper): float
{
    switch ($oper) {
        case '+':
            $resul = $oper1 + $oper2;
            break;

        case '-':
            $resul = $oper1 - $oper2;
            break;

        case '*':
            $resul = $oper1 * $oper2;
            break;

        case '/':
            $resul = $oper1 / $oper2;
            break;

        default:
            throw new Exception('Error: operación incorrecta.');
    }

    return $resul;
}

function mostrar_errores(array $error): void
{
    foreach ($error as $err) { ?>
        <p><?= $err ?></p><?php
    }
}

function mostrar_resultado($op1, $op2, $op, $res)
{ ?>
    <p>El resultado de <?= "$op1 $op $op2" ?> es <?= $res ?>.</p><?php
}
