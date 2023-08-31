<?php
declare(strict_types=1);

namespace Aikom\context\scenario\calls;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class CallsListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\calls
 **/
class CallsListEndpoint extends GetRequestScenario
{
    /**
     * Constructor CallsListEndpoint
     */
    public function __construct()
    {
        parent::__construct('calls/call-list');
    }
}