<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subject;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class SubjectListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subject
 **/
class SubjectListEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SubjectListEndpoint
     */
    public function __construct()
    {
        parent::__construct(
            'subject/subject-list',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}