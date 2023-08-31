<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\context\scenario\shift\ShiftCreateEndpoint;
use Aikom\context\scenario\shift\ShiftDeleteEndpoint;
use Aikom\context\scenario\shift\ShiftListEndpoint;
use Aikom\context\scenario\shift\ShiftUpdateEndpoint;
use Aikom\context\scenario\shift\ShiftViewEndpoint;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;

/**
 * Class ShiftManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class ShiftManager extends BasicManager
{
    /**
     * @param int $id
     * @return array
     * @throws \Exception
     */
    public function list(int $id): array
    {
        $response = $this->getClient()->send(
            new ShiftListEndpoint($id)
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
            new ShiftViewEndpoint($id)
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
            new ShiftUpdateEndpoint($id, $data)
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
            new ShiftDeleteEndpoint($id)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param string $name
     * @param string $description
     * @param string $maxTime
     * @param int $semesterId
     * @return array
     * @throws \Exception
     */
    public function create(
        string $name,
        string $description,
        string $maxTime,
        int $semesterId
    ): array
    {
        $response = $this->getClient()->send(
            new ShiftCreateEndpoint([
                'name' => $name,
                'description' => $description,
                'lesson_max_time' => $maxTime,
                'semester_id' => (string)$semesterId,
            ])
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }
}