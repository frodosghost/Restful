<?php

/*
 * This file is part of the Restful package.
 *
 * (c) James Rickard <james@frodosghost.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!@include __DIR__ . '/../vendor/autoload.php') {
    die(<<<'EOT'
You must set up the project dependencies, run the following commands:
    curl -s http://getcomposer.org/installer | php
    php composer.phar install


EOT
    );
}

$loader = require dirname(__DIR__).'/vendor/autoload.php';
$loader->add('Restful\\', __DIR__);
