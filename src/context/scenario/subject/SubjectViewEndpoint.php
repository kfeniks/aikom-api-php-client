<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subject;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class SubjectViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subject
 **/
class SubjectViewEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SubjectViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct(
            'subject/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}