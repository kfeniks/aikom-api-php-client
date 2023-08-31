<?php
declare(strict_types=1);

namespace Aikom\context\scenario\personnel;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class ProfessionListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\personnel
 **/
class ProfessionListEndpoint extends GetRequestScenario
{
    /**
     * Constructor ProfessionListEndpoint
     */
    public function __construct()
    {
        parent::__construct('personnel/profession-list');
    }
}