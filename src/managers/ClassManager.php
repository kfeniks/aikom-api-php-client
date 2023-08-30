<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\context\scenario\classes\ClassCreateEndpoint;
use Aikom\context\scenario\classes\ClassDeleteEndpoint;
use Aikom\context\scenario\classes\ClassListEndpoint;
use Aikom\context\scenario\classes\ClassUpdateEndpoint;
use Aikom\context\scenario\classes\ClassViewEndpoint;
use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;

/**
 * Class ClassManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class ClassManager extends BasicManager
{
    /**
     * @return array
     * @throws \Exception
     */
    public function list(): array
    {
        $response = $this->getClient()->send(
            new ClassListEndpoint()
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param int $personalId
     * @param int $smenaId
     * @param string $name
     * @return array
     * @throws \Exception
     */
    public function create(
        int $personalId,
        int $smenaId,
        string $name
    ): array
    {
        $response = $this->getClient()->send(
            new ClassCreateEndpoint([
                'personal_id' => $personalId,
                'smena_id' => $smenaId,
                'name' => $name,
            ])
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param int $id
     * @param array $data
     * @return array
     * @throws \Exception
     */
    public function update(int $id, array $data): array
    {
        $response = $this->getClient()->send(
            new ClassUpdateEndpoint($id, $data)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param int $id
     * @return array
     * @throws \Exception
     */
    public function view(int $id): array
    {
        $response = $this->getClient()->send(
            new ClassViewEndpoint($id)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param int $id
     * @return array
     * @throws \Exception
     */
    public function delete(int $id): array
    {
        $response = $this->getClient()->send(
            new ClassDeleteEndpoint($id)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }
}