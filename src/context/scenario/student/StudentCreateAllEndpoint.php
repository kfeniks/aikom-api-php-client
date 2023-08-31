<?php
declare(strict_types=1);

namespace Aikom\context\scenario\student;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class StudentCreateAllEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\student
 **/
class StudentCreateAllEndpoint extends BasicRequestScenario
{
    /**
     * Constructor StudentCreateAllEndpoint
     */
    public function __construct(array $data)
    {
        $filteredData['students'] = [];
        foreach ($data as $row) {
            $filteredData['students'][] = (object)$row;
        }

        parent::__construct(
            'student/create-all',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            $filteredData
        );
    }
}