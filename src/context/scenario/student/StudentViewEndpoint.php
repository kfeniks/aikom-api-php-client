<?php
declare(strict_types=1);

namespace Aikom\context\scenario\student;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class StudentViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\student
 **/
class StudentViewEndpoint extends GetRequestScenario
{
    /**
     * Constructor StudentViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('student/' . $id);
    }
}