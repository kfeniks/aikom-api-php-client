<?php
declare(strict_types=1);

namespace Aikom\context\scenario\journal;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class JournalIndexEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\journal
 **/
class JournalIndexEndpoint extends GetRequestScenario
{
    /**
     * Constructor JournalIndexEndpoint
     */
    public function __construct()
    {
        parent::__construct('journal');
    }
}