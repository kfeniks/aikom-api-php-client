<?php
declare(strict_types=1);

namespace Aikom\context\scenario\student;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class StudentUpdateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\student
 **/
class StudentUpdateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor StudentUpdateEndpoint
     */
    public function __construct(int $id, array $data)
    {
        parent::__construct(
            'student/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_PUT,
            $data
        );
    }
}