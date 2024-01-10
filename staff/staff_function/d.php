<?php
echo md5('1');

$var = '1';
if (md5($var) == md5('1')) {
    echo "!";
}
