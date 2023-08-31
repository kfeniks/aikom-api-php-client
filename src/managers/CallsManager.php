<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\context\scenario\calls\CallsCreateEndpoint;
use Aikom\context\scenario\calls\CallsDeleteEndpoint;
use Aikom\context\scenario\calls\CallsListEndpoint;
use Aikom\context\scenario\calls\CallsUpdateEndpoint;
use Aikom\context\scenario\calls\CallsViewEndpoint;
use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;

/**
 * Class CallsManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class CallsManager extends BasicManager
{
    /**
     * @return array
     * @throws \Exception
     */
    public function list(): array
    {
        $response = $this->getClient()->send(
            new CallsListEndpoint()
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
            new CallsViewEndpoint($id)
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
            new CallsDeleteEndpoint($id)
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
            new CallsUpdateEndpoint($id, $data)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param int $smenaId
     * @param string $name
     * @param string $startTime
     * @param string $stopTime
     * @return array
     * @throws \Exception
     */
    public function create(
        int $smenaId,
        string $name,
        string $startTime,
        string $stopTime
    ): array
    {
        $response = $this->getClient()->send(
            new CallsCreateEndpoint([
                'smena_id' => $smenaId,
                'name' => $name,
                'time_start' => $startTime,
                'time_stop' => $stopTime,
            ])
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }
}