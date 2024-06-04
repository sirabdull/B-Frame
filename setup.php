<?php

use Twig\Node\Expression\Binary\AbstractBinary;

$directories = [
    'app/controllers',
    'app/models',
    'app/views',
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
        echo('directory created');
        echo('<br>');
    }
}
