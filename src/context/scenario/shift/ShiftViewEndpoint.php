<?php
declare(strict_types=1);

namespace Aikom\context\scenario\shift;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class ShiftViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\shift
 **/
class ShiftViewEndpoint extends GetRequestScenario
{
    /**
     * Constructor ShiftViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('shift/' . $id);
    }
}