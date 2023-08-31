<?php
declare(strict_types=1);

namespace Aikom\context\scenario\calls;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class CallsUpdateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\calls
 **/
class CallsUpdateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor CallsUpdateEndpoint
     */
    public function __construct(int $id, array $data)
    {
        parent::__construct(
            'calls/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_PUT,
            $data
        );
    }
}