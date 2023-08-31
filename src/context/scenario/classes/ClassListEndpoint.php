<?php
declare(strict_types=1);

namespace Aikom\context\scenario\classes;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class ClassListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\classes
 **/
class ClassListEndpoint extends GetRequestScenario
{
    /**
     * Constructor ClassListEndpoint
     */
    public function __construct()
    {
        parent::__construct('class/class-list');
    }
}