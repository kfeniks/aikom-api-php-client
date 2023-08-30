<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\context\scenario\mark\MarkCreateEndpoint;
use Aikom\context\scenario\mark\MarkDeleteEndpoint;
use Aikom\context\scenario\mark\MarkIndexEndpoint;
use Aikom\context\scenario\mark\MarkListEndpoint;
use Aikom\context\scenario\mark\MarkUpdateEndpoint;
use Aikom\context\scenario\mark\MarkViewEndpoint;
use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;

/**
 * Class MarkManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class MarkManager extends BasicManager
{
    /**
     * @return array
     * @throws \Exception
     */
    public function index(): array
    {
        $response = $this->getClient()->send(
            new MarkIndexEndpoint()
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
            new MarkListEndpoint()
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param int $scheduleId
     * @param int $studentId
     * @param int $classId
     * @param int|null $personalId
     * @param int $markValue
     * @param string $comment
     * @return array
     * @throws \Exception
     */
    public function create(
        int $scheduleId,
        int $studentId,
        int $classId,
        ?int $personalId,
        int $markValue,
        string $comment
    ): array
    {
        $response = $this->getClient()->send(
            new MarkCreateEndpoint([
                "schedule_id" => $scheduleId,
                "student_id" => $studentId,
                "class_id" => $classId,
                "personal_id" => $personalId,
                "mark_value_id" => $markValue,
                "comment" => $comment,
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
            new MarkViewEndpoint($id)
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
            new MarkUpdateEndpoint($id, $data)
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
            new MarkDeleteEndpoint($id)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }
}