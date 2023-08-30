<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subgroup;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class SubGroupViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subgroup
 **/
class SubGroupViewEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SubGroupViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct(
            'subgroup/view/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}