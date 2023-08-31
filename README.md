# aikom-api-php-client
This is a php library for working with API from Aikom

---

## Install client

---

## Usage

$client = new Aikom\ApiClient(getenv("TEST_API_CLIENT"), getenv("TEST_API_PASSWORD"));

$manager = new Aikom\managers\SubjectManager($client);

echo json_encode($manager->index());

Before you move on, go ahead and explore the repository. You've already seen the **Source** page, but check out the **Commits**, **Branches**, and **Settings** pages.

---