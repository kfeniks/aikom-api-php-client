<?php
declare(strict_types=1);

namespace Aikom\context\scenario\calls;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class CallsCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\calls
 **/
class CallsCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor CallsCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'calls',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            $data
        );
    }
}