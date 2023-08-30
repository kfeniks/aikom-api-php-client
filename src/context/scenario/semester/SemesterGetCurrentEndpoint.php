<?php
declare(strict_types=1);

namespace Aikom\context\scenario\semester;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class SemesterGetCurrentEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\semester
 **/
class SemesterGetCurrentEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SemesterGetCurrentEndpoint
     */
    public function __construct()
    {
        parent::__construct(
            'semester/get-current',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}