<?php

function hamming(string $s1, string $s2): int|bool
{
    if (($longitud = strlen($s1)) != strlen($s2)) {
        return false;
    }

    $ret = 0;

    for ($i = 0; $i < $longitud; $i++) {
        if ($s1[$i] != $s2[$i]) {
            $ret++;
        }
    }

    return $ret;
}
