<?php
declare(strict_types=1);

namespace Aikom\collectors;

use Aikom\storages\BasicStorage;
use Aikom\storages\ProfessionStorage;

/**
 * Class ProfessionCollector
 * @version 1.0.0
 * @access public
 * @package Aikom\collectors
 **/
class ProfessionCollector extends BasicCollector
{
    /**
     * ProfessionCollector constructor.
     */
    public function __construct()
    {
        parent::__construct(new ProfessionStorage());
    }

}