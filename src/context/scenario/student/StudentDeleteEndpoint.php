<?php
declare(strict_types=1);

namespace Aikom\context\scenario\student;

use Aikom\context\scenario\DeleteRequestScenario;

/**
 * Class StudentDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\student
 **/
class StudentDeleteEndpoint extends DeleteRequestScenario
{
    /**
     * Constructor StudentDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('student/' . $id);
    }
}