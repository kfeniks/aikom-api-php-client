<?php
declare(strict_types=1);

namespace Aikom\context\scenario\semester;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * how to use:
 * new class([
 * "name": "2030-2031 [2]",
 * "start_date": "2031-01-01",
 * "end_date": "2031-08-20"
 * ])
 * Class SemesterCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\semester
 **/
class SemesterCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SemesterCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'semester',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            $data
        );
    }
}