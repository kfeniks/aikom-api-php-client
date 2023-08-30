<?php
declare(strict_types=1);

namespace Aikom\context\scenario\classes;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class ClassListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\classes
 **/
class ClassListEndpoint extends BasicRequestScenario
{
    /**
     * Constructor ClassListEndpoint
     */
    public function __construct()
    {
        parent::__construct(
            'class/class-list',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}