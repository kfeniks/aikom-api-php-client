<?php
declare(strict_types=1);

namespace Aikom\context\scenario\semester;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class SemesterSetCurrentEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\semester
 **/
class SemesterSetCurrentEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SemesterSetCurrentEndpoint
     */
    public function __construct(int $semesterId)
    {
        parent::__construct(
            'semester/set-current',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            ['semester_id' => $semesterId]
        );
    }
}