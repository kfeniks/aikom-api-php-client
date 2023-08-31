<?php
declare(strict_types=1);

namespace Aikom\context\scenario\shift;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * new class([
 * "name": "44",
 * "description": "",
 * "lesson_max_time": "18:00:00",
 * "semester_id": "377009"
 * ])
 *
 * Class ShiftCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\shift
 **/
class ShiftCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor ShiftCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'shift',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            $data
        );
    }
}