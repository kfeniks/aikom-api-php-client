<?php
declare(strict_types=1);

namespace Aikom\context\scenario\mark;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class MarkIndexEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\mark
 **/
class MarkIndexEndpoint extends GetRequestScenario
{
    /**
     * Constructor MarkIndexEndpoint
     */
    public function __construct()
    {
        parent::__construct('mark');
    }
}