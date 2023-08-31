<?php
declare(strict_types=1);

namespace Aikom\context\scenario\room;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class RoomViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\room
 **/
class RoomViewEndpoint extends GetRequestScenario
{
    /**
     * Constructor RoomViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('room/' . $id);
    }
}