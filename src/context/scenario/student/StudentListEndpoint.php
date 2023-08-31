<?php
declare(strict_types=1);

namespace Aikom\context\scenario\student;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class StudentListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\student
 **/
class StudentListEndpoint extends BasicRequestScenario
{
    /**
     * Constructor StudentListEndpoint
     */
    public function __construct(int $classId)
    {
        parent::__construct(
            'student/list',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            [
                'class_id' => $classId,
            ]
        );
    }
}