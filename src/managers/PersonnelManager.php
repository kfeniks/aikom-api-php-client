<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\ApiClient;
use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\validators\ResponseValidator;
use Aikom\valueObjects\ErrorResponse;

/**
 * Class PersonnelManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class PersonnelManager
{
    /**
     * @var ApiClient
     */
    private ApiClient $client;

    /**
     * Constructor PersonnelManager
     */
    public function __construct()
    {
        $this->client = new ApiClient();
    }

    public function getProfessionList(): array
    {
        $response = $this->client->send(
            new \Aikom\context\scenario\personnel\ProfessionListEndpoint()
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        if ($validator->validate($responseAsArray)) {
            $errorEntity = new ErrorResponse(
                $responseAsArray['name'],
                $responseAsArray['message'],
                $responseAsArray['code'],
                $responseAsArray['status'],
                $responseAsArray['type']
            );

            throw new \Exception($errorEntity->getMessage());
        }

        return $responseAsArray;
    }
}