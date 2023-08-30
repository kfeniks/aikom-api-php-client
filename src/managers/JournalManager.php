<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\context\scenario\journal\JournalCreateEndpoint;
use Aikom\context\scenario\journal\JournalDeleteEndpoint;
use Aikom\context\scenario\journal\JournalIndexEndpoint;
use Aikom\context\scenario\journal\JournalUpdateEndpoint;
use Aikom\context\scenario\journal\JournalViewEndpoint;
use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;

/**
 * Class JournalManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class JournalManager extends BasicManager
{
    /**
     * @return array
     * @throws \Exception
     */
    public function index(): array
    {
        $response = $this->getClient()->send(
            new JournalIndexEndpoint()
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
            new JournalDeleteEndpoint($id)
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
            new JournalViewEndpoint($id)
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
            new JournalUpdateEndpoint($id, $data)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param array $data
     * @return array
     * @throws \Exception
     */
    public function create(array $data): array
    {
        $response = $this->getClient()->send(
            new JournalCreateEndpoint($data)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }
}