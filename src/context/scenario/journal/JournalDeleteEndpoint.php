<?php
declare(strict_types=1);

namespace Aikom\context\scenario\journal;

use Aikom\context\scenario\DeleteRequestScenario;

/**
 * Class JournalDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\journal
 **/
class JournalDeleteEndpoint extends DeleteRequestScenario
{
    /**
     * Constructor JournalDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('journal/' . $id);
    }
}