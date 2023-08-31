<?php
declare(strict_types=1);

namespace Aikom\context\scenario\semester;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class SemesterIndexEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\semester
 **/
class SemesterIndexEndpoint extends GetRequestScenario
{
    /**
     * Constructor SemesterIndexEndpoint
     */
    public function __construct()
    {
        parent::__construct('semester');
    }
}