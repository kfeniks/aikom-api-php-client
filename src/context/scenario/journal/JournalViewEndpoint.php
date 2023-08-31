<?php
declare(strict_types=1);

namespace Aikom\context\scenario\journal;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class JournalViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\journal
 **/
class JournalViewEndpoint extends GetRequestScenario
{
    /**
     * Constructor JournalViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('journal/' . $id);
    }
}