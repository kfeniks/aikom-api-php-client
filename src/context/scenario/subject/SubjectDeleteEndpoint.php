<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subject;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class SubjectDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subject
 **/
class SubjectDeleteEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SubjectDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct(
            'subject/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_DELETE,
            []
        );
    }
}