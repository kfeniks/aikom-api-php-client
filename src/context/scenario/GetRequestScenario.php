<?php
declare(strict_types=1);

namespace Aikom\context\scenario;

use Aikom\context\enums\RequestMethodsEnum;

/**
 * Class GetRequestScenario
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario
 **/
class GetRequestScenario extends BasicRequestScenario
{
    /**
     * Constructor GetRequestScenario
     */
    public function __construct(string $endpoint)
    {
        parent::__construct(
            $endpoint,
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}