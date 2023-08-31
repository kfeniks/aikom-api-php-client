<?php
declare(strict_types=1);

namespace Aikom;

use Aikom\context\scenario\BasicRequestScenario;
use Curl\Curl;

/**
 * Class ApiClient
 * @version 1.0.0
 * @access public
 * @package Aikom
 **/
class ApiClient
{
    /**
     * @var string|null
     */
    private ?string $secretToken = null;
    /**
     * @var Curl
     */
    private Curl $client;
    /**
     * @var string
     */
    private string $login;
    /**
     * @var string
     */
    private string $password;
    /**
     * @var bool
     */
    private bool $printCurlResponse;


    /**
     * Constructor ApiClient
     * @param string $login
     * @param string $password
     * @param bool $printCurlResponse
     */
    public function __construct(string $login, string $password, bool $printCurlResponse = false)
    {
        $this->client = new Curl();
        $this->printCurlResponse = $printCurlResponse;

        $this->client->setHeader('Content-Type', 'application/json');
        $this->client->setCookie('NODE_ID', getenv("NODE_ID") ?? $_ENV['NODE_ID']);
        $this->client->setCookie('_csrf', getenv("CSRF_TOKEN") ?? $_ENV['CSRF_TOKEN']);

        $this->login = $login;
        $this->password = $password;

        $this->checkToken();
    }

    /**
     * @param string $username
     * @param string $password
     * @return void
     */
    public function login(string $username, string $password): void
    {
        $baseUrl = getenv("GLOBAL_API_URL") ?? $_ENV['GLOBAL_API_URL'];
        $url = $baseUrl . 'user/login';
        $data = [
            "username" => $username,
            "password" => $password,
        ];

        $this->client->post($url, json_encode($data));

        if ($this->printCurlResponse && $this->client->error) {
            echo "cURL Error: " . $this->client->error_message;
        } else {
            echo "Response: " . $this->client->response;
        }

        $responseAsArray = json_decode($this->client->response, true);

        if (!empty($responseAsArray)) {
            $this->secretToken = $responseAsArray['access_token'];
            /**
             * Response: {
             * "access_token": "vbIjESzd_wCGyptVvyPTnAyFsJGMrTds",
             * "refresh_token": "0iXoqXG0VLFxtq0ZRBfYU6nhY6H6g1_U",
             * "expires_token": 1696064580,
             * "email_hash": "93bf2e4f51c879cfc04b52bf73892225",
             * "student_id": null,
             * "FIO": "API Client API Client",
             * "avatar": {
             * "image_url": null,
             * "datetime": null
             * },
             * "permissions": {
             * "isuo_nzportal_api_client": [
             * "nz_api_client"
             * ]
             * },
             * "error_message": ""
             * }
             */
        }
    }

    /**
     * @return void
     */
    public function checkToken(): void
    {
        if (!$this->secretToken) {
            $this->login($this->login, $this->password);
        }
    }

    /**
     * @param BasicRequestScenario $scenario
     * @return string|null
     */
    public function send(BasicRequestScenario $scenario): ?string
    {
        $this->checkToken();

        $baseUrl = getenv("GLOBAL_API_URL") ?? $_ENV['GLOBAL_API_URL'];
        $url = $baseUrl . $scenario->getEndpoint();

        $this->client->setHeader('Authorization', 'Bearer ' . $this->secretToken);

        switch ($scenario->getMethod()) {
            case 'GET':
                if (!empty($scenario->getData())) {
                    $url .= '?' . http_build_query($scenario->getData()); // Append query parameters to the URL
                }
                $this->client->get($url);
                break;
            case 'POST':
                $this->client->post($url, json_encode($scenario->getData()));
                break;
            case 'PUT':
                $this->client->put($url, json_encode($scenario->getData()));
                break;
            case 'DELETE':
                $this->client->delete($url);
                break;
        }

        if ($this->printCurlResponse && $this->client->error) {
            echo "cURL Error: " . $this->client->error_message;
        } else {
            echo "Response: " . $this->client->response;
        }

        return $this->client->response;
    }

    /**
     * @return Curl
     */
    public function getClient(): Curl
    {
        return $this->client;
    }

    /**
     * @return string|null
     */
    public function getSecretToken(): ?string
    {
        return $this->secretToken;
    }
}