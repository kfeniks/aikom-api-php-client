<?php
declare(strict_types=1);

namespace Aikom\context\scenario\shift;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class ShiftUpdateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\shift
 **/
class ShiftUpdateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor ShiftUpdateEndpoint
     */
    public function __construct(int $id, array $data)
    {
        parent::__construct(
            'shift/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_PUT,
            $data
        );
    }
}