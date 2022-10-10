<?php

try {
    strpos();
} catch (ParseError $e) {
    echo $e->getMessage() . "\n";
} finally {
    echo "Llega al final.\n";
}
