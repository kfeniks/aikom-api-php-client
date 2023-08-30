<?php
declare(strict_types=1);

namespace Aikom\context\scenario\journal;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class JournalDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\journal
 **/
class JournalDeleteEndpoint extends BasicRequestScenario
{
    /**
     * Constructor JournalDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct(
            'journal/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_DELETE,
            []
        );
    }
}