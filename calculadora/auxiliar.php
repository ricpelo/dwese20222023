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
 * @param  mixed  $oper1 El primer operando.
 * @param  mixed  $oper2 El segundo operando.
 * @param  string $oper  El operador
 *                       (valores válidos: '+', '-', '*', '/').
 * @return mixed         El resultado del cálculo.
 */
function calcular_resultado($oper1, $oper2, $oper)
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
            $resul = 'Error: operación incorrecta.';
    }

    return $resul;
}
