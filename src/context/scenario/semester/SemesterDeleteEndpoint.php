<?php
declare(strict_types=1);

namespace Aikom\context\scenario\semester;

use Aikom\context\scenario\DeleteRequestScenario;

/**
 * Class SemesterDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\semester
 **/
class SemesterDeleteEndpoint extends DeleteRequestScenario
{
    /**
     * Constructor SemesterDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('semester/' . $id);
    }
}