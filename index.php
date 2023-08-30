<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Aikom\ApiClient;
use Aikom\managers\SubjectManager;

$client = new ApiClient(getenv("TEST_API_CLIENT"), getenv("TEST_API_PASSWORD"));
$manager = new SubjectManager($client);

echo json_encode($manager->index());