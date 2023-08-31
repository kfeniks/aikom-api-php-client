<?php
declare(strict_types=1);

namespace Aikom\context\scenario\classes;

use Aikom\context\scenario\DeleteRequestScenario;

/**
 * Class ClassDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\classes
 **/
class ClassDeleteEndpoint extends DeleteRequestScenario
{
    /**
     * Constructor ClassDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('class/' . $id);
    }
}