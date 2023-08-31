<?php
declare(strict_types=1);

namespace Aikom\context\scenario\calls;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class CallsViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\calls
 **/
class CallsViewEndpoint extends GetRequestScenario
{
    /**
     * Constructor CallsViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('calls/' . $id);
    }
}