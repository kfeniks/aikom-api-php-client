<?php
declare(strict_types=1);

namespace Aikom\context\scenario;

use Aikom\context\enums\RequestMethodsEnum;

/**
 * Class DeleteRequestScenario
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario
 **/
class DeleteRequestScenario extends BasicRequestScenario
{
    /**
     * Constructor DeleteRequestScenario
     */
    public function __construct(string $endpoint)
    {
        parent::__construct(
            $endpoint,
            RequestMethodsEnum::REQUEST_METHOD_DELETE,
            []
        );
    }
}