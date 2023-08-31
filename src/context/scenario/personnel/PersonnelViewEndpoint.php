<?php
declare(strict_types=1);

namespace Aikom\context\scenario\personnel;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class PersonnelViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\personnel
 **/
class PersonnelViewEndpoint extends GetRequestScenario
{
    /**
     * Constructor PersonnelViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('personnel/' . $id);
    }
}