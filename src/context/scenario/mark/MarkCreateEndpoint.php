<?php
declare(strict_types=1);

namespace Aikom\context\scenario\mark;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * how to use:
 *  new class([
 *  "schedule_id": 1777,
 *  "student_id": 39605882,
 *  "class_id": 8835889,
 *  "personal_id": null,
 *  "mark_value_id": 6,
 *  "comment": ""
 *  ])
 *
 * Class MarkCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\mark
 **/
class MarkCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor MarkCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'mark',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            $data
        );
    }
}