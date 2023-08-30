<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\context\scenario\subject\SubjectBaseListEndpoint;
use Aikom\context\scenario\subject\SubjectCreateEndpoint;
use Aikom\context\scenario\subject\SubjectDeleteEndpoint;
use Aikom\context\scenario\subject\SubjectIndexEndpoint;
use Aikom\context\scenario\subject\SubjectListEndpoint;
use Aikom\context\scenario\subject\SubjectUpdateEndpoint;
use Aikom\context\scenario\subject\SubjectViewEndpoint;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;

/**
 * Class SubjectManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class SubjectManager extends BasicManager
{
    /**
     * @param int $id
     * @return array
     * @throws \Exception
     */
    public function view(int $id): array
    {
        $response = $this->getClient()->send(
            new SubjectViewEndpoint($id)
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
            new SubjectDeleteEndpoint($id)
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
            new SubjectUpdateEndpoint($id, $data)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param string $name
     * @param string $shortname
     * @param int $inUse
     * @param int $baseSubjectId
     * @param int $semesterId
     * @return array
     * @throws \Exception
     */
    public function create(
        string $name,
        string $shortname,
        int $inUse,
        int $baseSubjectId,
        int $semesterId
    ): array
    {
        $response = $this->getClient()->send(
            new SubjectCreateEndpoint([
                'name' => $name,
                'shortname' => $shortname,
                'in_use' => $inUse,
                'base_subject_id' => $baseSubjectId,
                'semester_id' => $semesterId,
            ])
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
            new SubjectListEndpoint()
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
    public function baseList(): array
    {
        $response = $this->getClient()->send(
            new SubjectBaseListEndpoint()
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
    public function index(): array
    {
        $response = $this->getClient()->send(
            new SubjectIndexEndpoint()
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }
}