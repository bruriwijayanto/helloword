<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use HelloWorld\SayHello;

function helo(SayHello $helo)
{
    $helo->world();
}
helo();
//
