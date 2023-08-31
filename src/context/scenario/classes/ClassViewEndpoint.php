<?php
declare(strict_types=1);

namespace Aikom\context\scenario\classes;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class ClassViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\classes
 **/
class ClassViewEndpoint extends GetRequestScenario
{
    /**
     * Constructor ClassViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('class/' . $id);
    }
}