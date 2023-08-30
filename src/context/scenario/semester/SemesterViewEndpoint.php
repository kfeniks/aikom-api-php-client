<?php
declare(strict_types=1);

namespace Aikom\context\scenario\semester;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class SemesterViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\semester
 **/
class SemesterViewEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SemesterViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct(
            'semester/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}