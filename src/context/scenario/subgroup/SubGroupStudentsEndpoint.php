<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subgroup;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class SubGroupStudentsEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subgroup
 **/
class SubGroupStudentsEndpoint extends GetRequestScenario
{
    /**
     * Constructor SubGroupStudentsEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('subgroup/subgroup-students/' . $id);
    }
}