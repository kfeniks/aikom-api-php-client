<?php
declare(strict_types=1);

namespace Aikom\context\scenario\shift;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class ShiftListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\shift
 **/
class ShiftListEndpoint extends GetRequestScenario
{
    /**
     * Constructor ShiftListEndpoint
     */
    public function __construct()
    {
        parent::__construct('shift/shift-list');
    }
}