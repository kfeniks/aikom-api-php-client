<?php
declare(strict_types=1);

namespace Aikom\context\scenario\response;

use Aikom\context\BasicResponseScenario;
use Aikom\valueObjects\Profession;

/**
 * Class ProfessionResponseScenario
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\response
 **/
class ProfessionResponseScenario extends BasicResponseScenario
{
    /**
     * Constructor ProfessionResponseScenario
     */
    public function __construct()
    {
        parent::__construct('profession', Profession::fields());
    }
}