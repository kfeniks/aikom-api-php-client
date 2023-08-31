<?php
declare(strict_types=1);

namespace Aikom\context\scenario\student;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * how to use:
 * new class([
 * "class_id": 8835894,
 * "lastname": "Пертров2",
 * "firstname": "Петя",
 * "patronymic": "123",
 * "student_birth": "2021-02-23",
 * "student_sex": 1
 * ])
 *
 * Class StudentCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\student
 **/
class StudentCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor StudentCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'student',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            $data
        );
    }
}