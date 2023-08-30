<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\context\scenario\subgroup\SubGroupStudentsEndpoint;
use Aikom\context\scenario\subgroup\SubGroupViewEndpoint;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;

/**
 * Class SubGroupManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class SubGroupManager extends BasicManager
{
    /**
     * @param int $id
     * @return array
     * @throws \Exception
     */
    public function view(int $id): array
    {
        $response = $this->getClient()->send(
            new SubGroupViewEndpoint($id)
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
    public function students(int $id): array
    {
        $response = $this->getClient()->send(
            new SubGroupStudentsEndpoint($id)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }
}