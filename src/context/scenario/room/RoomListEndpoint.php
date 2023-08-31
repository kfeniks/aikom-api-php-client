<?php
declare(strict_types=1);

namespace Aikom\context\scenario\room;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class RoomListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\room
 **/
class RoomListEndpoint extends GetRequestScenario
{
    /**
     * Constructor RoomListEndpoint
     */
    public function __construct()
    {
        parent::__construct('room/room-list');
    }
}