<?php

namespace Differ\Formatters;

use Exception;

function format(array $diffTree, string $type): string
{
    switch ($type) {
        case 'stylish':
            return Stylish\format($diffTree);
        case 'plain':
            return Plain\format($diffTree);
        case 'json':
            return Json\format($diffTree);
        default:
            throw new Exception("Unknown format \"$type\"");
    }
}
