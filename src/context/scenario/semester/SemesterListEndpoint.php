<?php
declare(strict_types=1);

namespace Aikom\context\scenario\semester;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class SemesterListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\semester
 **/
class SemesterListEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SemesterListEndpoint
     */
    public function __construct()
    {
        parent::__construct(
            'semester/semester-list',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}