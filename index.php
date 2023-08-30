<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Aikom\ApiClient;

$client = new ApiClient();

$client->get();

getenv("HOME");