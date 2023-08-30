<?php
declare(strict_types=1);

namespace Aikom\context\scenario\room;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class RoomIndexEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\room
 **/
class RoomIndexEndpoint extends BasicRequestScenario
{
    /**
     * Constructor RoomIndexEndpoint
     */
    public function __construct()
    {
        parent::__construct(
            'room',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}