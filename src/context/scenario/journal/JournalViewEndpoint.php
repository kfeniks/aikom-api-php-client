<?php
declare(strict_types=1);

namespace Aikom\context\scenario\journal;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class JournalViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\journal
 **/
class JournalViewEndpoint extends BasicRequestScenario
{
    /**
     * Constructor JournalViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct(
            'journal/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}