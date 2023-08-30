<?php
declare(strict_types=1);

namespace Aikom\context\scenario\room;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * how to use:
 * new class([
 * "name": "12 йцу[1]",
 * "area": 70,
 * "specialization": "Історія",
 * "is_not_for_studies": 0,
 * "semester_id": "377009"
 * ])
 *
 * Class RoomCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\room
 **/
class RoomCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor RoomCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'room',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            $data
        );
    }
}