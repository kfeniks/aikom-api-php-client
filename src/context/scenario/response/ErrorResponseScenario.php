<?php
declare(strict_types=1);

namespace Aikom\context\scenario\response;

use Aikom\context\BasicResponseScenario;

/**
 * Class ErrorResponseScenario
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\response
 **/
class ErrorResponseScenario extends BasicResponseScenario
{
    /**
     * Constructor ErrorResponseScenario
     */
    public function __construct()
    {
        parent::__construct('error');
    }
}