<?php
declare(strict_types=1);

namespace Aikom\context\scenario\room;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class RoomIndexEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\room
 **/
class RoomIndexEndpoint extends GetRequestScenario
{
    /**
     * Constructor RoomIndexEndpoint
     */
    public function __construct()
    {
        parent::__construct('room');
    }
}