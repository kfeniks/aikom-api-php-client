<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\context\scenario\semester\SemesterCreateEndpoint;
use Aikom\context\scenario\semester\SemesterDeleteEndpoint;
use Aikom\context\scenario\semester\SemesterGetCurrentEndpoint;
use Aikom\context\scenario\semester\SemesterIndexEndpoint;
use Aikom\context\scenario\semester\SemesterListEndpoint;
use Aikom\context\scenario\semester\SemesterSetCurrentEndpoint;
use Aikom\context\scenario\semester\SemesterUpdateEndpoint;
use Aikom\context\scenario\semester\SemesterViewEndpoint;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;

/**
 * Class SemesterManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class SemesterManager extends BasicManager
{
    /**
     * @param string $name
     * @param string $start_date
     * @param string $end_date
     * @return array
     * @throws \Exception
     */
    public function create(
        string $name,
        string $start_date,
        string $end_date
    ): array
    {
        $response = $this->getClient()->send(
            new SemesterCreateEndpoint([
                'name' => $name,
                'start_date' => $start_date,
                'end_date' => $end_date,
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
     * @return array
     * @throws \Exception
     */
    public function view(int $id): array
    {
        $response = $this->getClient()->send(
            new SemesterViewEndpoint($id)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * Full entities list
     * @return array
     * @throws \Exception
     */
    public function index(): array
    {
        $response = $this->getClient()->send(
            new SemesterIndexEndpoint()
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
            new SemesterListEndpoint()
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
    public function current(): array
    {
        $response = $this->getClient()->send(
            new SemesterGetCurrentEndpoint()
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
    public function setCurrent(int $id): array
    {
        $response = $this->getClient()->send(
            new SemesterSetCurrentEndpoint($id)
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
            new SemesterUpdateEndpoint($id, $data)
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
            new SemesterDeleteEndpoint($id)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }
}