<?php
declare(strict_types=1);

namespace Aikom\context\scenario\room;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class RoomUpdateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\room
 **/
class RoomUpdateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor RoomUpdateEndpoint
     */
    public function __construct(int $id, array $data)
    {
        parent::__construct(
            'room/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_PUT,
            $data
        );
    }
}