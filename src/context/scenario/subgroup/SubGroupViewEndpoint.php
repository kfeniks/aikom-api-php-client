<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subgroup;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class SubGroupViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subgroup
 **/
class SubGroupViewEndpoint extends GetRequestScenario
{
    /**
     * Constructor SubGroupViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('subgroup/view/' . $id);
    }
}