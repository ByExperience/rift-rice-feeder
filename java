#!/usr/local/php8/bin/php
<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use RiceProvider\LLA;

(new LLA())->run();