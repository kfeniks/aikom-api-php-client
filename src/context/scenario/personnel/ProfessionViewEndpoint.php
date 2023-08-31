<?php
declare(strict_types=1);

namespace Aikom\context\scenario\personnel;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class ProfessionViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\personnel
 **/
class ProfessionViewEndpoint extends GetRequestScenario
{
    /**
     * Constructor ProfessionViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('personnel/profession/' . $id);
    }
}