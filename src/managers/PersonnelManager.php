<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\builders\ProfessionBuilder;
use Aikom\collectors\BasicCollector;
use Aikom\collectors\ProfessionCollector;
use Aikom\context\scenario\personnel\PersonnelCreateEndpoint;
use Aikom\context\scenario\personnel\PersonnelViewEndpoint;
use Aikom\context\scenario\personnel\ProfessionViewEndpoint;
use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\context\scenario\response\ProfessionResponseScenario;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;
use Aikom\context\scenario\personnel\ProfessionListEndpoint;
use Aikom\valueObjects\Personal;

/**
 * Class PersonnelManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class PersonnelManager extends BasicManager
{
    /**
     * @param string $firstname
     * @param string $lastname
     * @param string $personal_birth
     * @return array
     * @throws \Exception
     */
    public function create(
        string $firstname,
        string $lastname,
        string $personal_birth
    ): array
    {
        $response = $this->getClient()->send(
            new PersonnelCreateEndpoint([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'personal_birth' => $personal_birth,
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
     * @return Personal|null
     * @throws \Exception
     */
    public function view(int $id): ?Personal
    {
        $response = $this->getClient()->send(
            new PersonnelViewEndpoint($id)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return new Personal($responseAsArray);
    }

    /**
     * @param int $id
     * @return string|null
     */
    public function profession(int $id): ?string
    {
        $response = $this->getClient()->send(
            new ProfessionViewEndpoint($id)
        );

        return $response;
    }

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
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

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