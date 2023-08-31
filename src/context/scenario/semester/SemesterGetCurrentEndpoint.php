<?php
declare(strict_types=1);

namespace Aikom\context\scenario\semester;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class SemesterGetCurrentEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\semester
 **/
class SemesterGetCurrentEndpoint extends GetRequestScenario
{
    /**
     * Constructor SemesterGetCurrentEndpoint
     */
    public function __construct()
    {
        parent::__construct('semester/get-current');
    }
}