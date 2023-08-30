<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subject;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class SubjectIndexEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subject
 **/
class SubjectIndexEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SubjectIndexEndpoint
     */
    public function __construct()
    {
        parent::__construct(
            'subject',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}