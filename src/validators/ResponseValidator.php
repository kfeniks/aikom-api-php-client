<?php
declare(strict_types=1);

namespace Aikom\validators;

use Aikom\context\BasicResponseScenario;

/**
 * Class ResponseValidator
 * @version 1.0.0
 * @access public
 * @package Aikom\validators
 **/
class ResponseValidator
{
    /**
     * @var BasicResponseScenario
     */
    private BasicResponseScenario $scenario;

    /**
     * ResponseValidator constructor.
     * @param BasicResponseScenario $scenario
     */
    public function __construct(BasicResponseScenario $scenario)
    {
        $this->scenario = $scenario;
    }

    /**
     * @param array $response
     * @return bool
     */
    public function validate(array $response): bool
    {
        foreach ($this->scenario->getFields() as $field) {
            if (!isset($response[$field])) {
                return false;
            }
        }

        return true;
    }
}