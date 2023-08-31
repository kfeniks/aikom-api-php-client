<?php
declare(strict_types=1);

namespace Aikom\context\scenario\mark;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class MarkListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\mark
 **/
class MarkListEndpoint extends GetRequestScenario
{
    /**
     * Constructor MarkListEndpoint
     */
    public function __construct()
    {
        parent::__construct('mark/mark-value-list');
    }
}