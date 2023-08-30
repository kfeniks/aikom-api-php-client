<?php
declare(strict_types=1);

namespace Aikom\context\scenario\journal;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class JournalUpdateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\journal
 **/
class JournalUpdateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor JournalUpdateEndpoint
     */
    public function __construct(int $id, array $data)
    {
        parent::__construct(
            'journal/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_PUT,
            $data
        );
    }
}