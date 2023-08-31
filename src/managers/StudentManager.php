<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\context\scenario\student\StudentCreateAllEndpoint;
use Aikom\context\scenario\student\StudentCreateEndpoint;
use Aikom\context\scenario\student\StudentDeleteEndpoint;
use Aikom\context\scenario\student\StudentListEndpoint;
use Aikom\context\scenario\student\StudentUpdateEndpoint;
use Aikom\context\scenario\student\StudentViewEndpoint;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;

/**
 * Class StudentManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class StudentManager extends BasicManager
{
    /**
     * @param int $classId
     * @return array
     * @throws \Exception
     */
    public function list(int $classId): array
    {
        $response = $this->getClient()->send(
            new StudentListEndpoint($classId)
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
    public function createAll(array $data): array
    {
        $response = $this->getClient()->send(
            new StudentCreateAllEndpoint($data)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param int $classId
     * @param string $lastname
     * @param string $firstname
     * @param string $patronymic
     * @param string $birthDate
     * @param int $sexStatus
     * @return array
     * @throws \Exception
     */
    public function create(
        int $classId,
        string $lastname,
        string $firstname,
        string $patronymic,
        string $birthDate,
        int $sexStatus
    ): array
    {
        $response = $this->getClient()->send(
            new StudentCreateEndpoint([
                'class_id' => $classId,
                'lastname' => $lastname,
                'firstname' => $firstname,
                'patronymic' => $patronymic,
                'student_birth' => $birthDate,
                'student_sex' => $sexStatus,
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
            new StudentUpdateEndpoint($id, $data)
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
            new StudentViewEndpoint($id)
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
            new StudentDeleteEndpoint($id)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }
}