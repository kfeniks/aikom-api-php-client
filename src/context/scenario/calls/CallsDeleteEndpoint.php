<?php
declare(strict_types=1);

namespace Aikom\context\scenario\calls;

use Aikom\context\scenario\DeleteRequestScenario;

/**
 * Class CallsDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\calls
 **/
class CallsDeleteEndpoint extends DeleteRequestScenario
{
    /**
     * Constructor CallsDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('calls/' . $id);
    }
}