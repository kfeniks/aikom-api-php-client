<?php
declare(strict_types=1);

namespace Aikom\context\scenario\shift;

use Aikom\context\scenario\DeleteRequestScenario;

/**
 * Class ShiftDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\shift
 **/
class ShiftDeleteEndpoint extends DeleteRequestScenario
{
    /**
     * Constructor ShiftDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('shift/' . $id);
    }
}