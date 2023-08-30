<?php
declare(strict_types=1);

namespace Aikom\context\scenario\semester;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class SemesterDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\semester
 **/
class SemesterDeleteEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SemesterDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct(
            'semester/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_DELETE,
            []
        );
    }
}