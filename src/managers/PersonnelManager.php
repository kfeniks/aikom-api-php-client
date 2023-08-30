<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\ApiClient;
use Aikom\builders\ProfessionBuilder;
use Aikom\collectors\BasicCollector;
use Aikom\collectors\ProfessionCollector;
use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\context\scenario\response\ProfessionResponseScenario;
use Aikom\validators\ResponseValidator;
use Aikom\valueObjects\ErrorResponse;
use Aikom\context\scenario\personnel\ProfessionListEndpoint;

/**
 * Class PersonnelManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class PersonnelManager extends BasicManager
{
    /**
     * @return BasicCollector
     * @throws \Exception
     */
    public function getProfessionList(): BasicCollector
    {
        $response = $this->getClient()->send(
            new ProfessionListEndpoint()
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        if ($validator->validate($responseAsArray)) {
            $errorEntity = new ErrorResponse(
                $responseAsArray['name'],
                $responseAsArray['message'],
                $responseAsArray['code'],
                $responseAsArray['status'],
                $responseAsArray['type']
            );

            throw new \Exception($errorEntity->getMessage());
        }

        if (!isset($responseAsArray['data'])) {
            throw new \Exception('Invalid response');
        }

        $validator->setScenario(new ProfessionResponseScenario());

        $collection = new ProfessionCollector();
        $builder = new ProfessionBuilder();

        foreach ($responseAsArray['data'] as $row) {
            if (!$validator->validate($row)) {
                throw new \Exception('Wrong response data');
            }

            $profession = $builder->build($row);
            $collection->getStorage()->attach($profession);
        }

        return $collection;
    }
}