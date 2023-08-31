# aikom-api-php-client
This is a php library for working with API from Aikom

---

## Install client

---

## Usage
$_ENV[] or getenv()
$client = new Aikom\ApiClient(getenv("TEST_API_CLIENT"), getenv("TEST_API_PASSWORD"));

$manager = new Aikom\managers\SubjectManager($client);

echo json_encode($manager->index());
---