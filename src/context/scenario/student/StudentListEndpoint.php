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
     * warning: it's GET method in docs, but in real it's POST
     * Constructor StudentListEndpoint
     */
    public function __construct(int $classId)
    {
        parent::__construct(
            'student/list',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            [
                'classId' => $classId,
            ]
        );
    }
}