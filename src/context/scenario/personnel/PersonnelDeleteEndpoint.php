<?php
declare(strict_types=1);

namespace Aikom\context\scenario\personnel;

use Aikom\context\scenario\DeleteRequestScenario;

/**
 * Class PersonnelDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\personnel
 **/
class PersonnelDeleteEndpoint extends DeleteRequestScenario
{
    /**
     * Constructor PersonnelDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('personnel/' . $id);
    }
}