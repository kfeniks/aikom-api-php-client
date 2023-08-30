<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\context\scenario\room\RoomCreateEndpoint;
use Aikom\context\scenario\room\RoomIndexEndpoint;
use Aikom\context\scenario\room\RoomListEndpoint;
use Aikom\context\scenario\room\RoomUpdateEndpoint;
use Aikom\context\scenario\room\RoomViewEndpoint;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;

/**
 * Class RoomManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class RoomManager extends BasicManager
{
    /**
     * @return array
     * @throws \Exception
     */
    public function index(): array
    {
        $response = $this->getClient()->send(
            new RoomIndexEndpoint()
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function list(): array
    {
        $response = $this->getClient()->send(
            new RoomListEndpoint()
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
            new RoomViewEndpoint($id)
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
            new RoomUpdateEndpoint($id, $data)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param string $name
     * @param int $area
     * @param string $specialization
     * @param int $studiesStatus
     * @param int $semesterId
     * @return array
     * @throws \Exception
     */
    public function create(
        string $name,
        int $area,
        string $specialization,
        int $studiesStatus,
        int $semesterId
    ): array
    {
        $response = $this->getClient()->send(
            new RoomCreateEndpoint([
                'name' => $name,
                'area' => $area,
                'specialization' => $specialization,
                'is_not_for_studies' => $studiesStatus,
                'semester_id' => $semesterId,
            ])
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }
}