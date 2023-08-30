<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subject;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * how to use:
 * new class([
 * "name": "История",
 * "shortname": "Ист.",
 * "in_use": 1,
 * "base_subject_id": 1,
 * "semester_id": "377009"
 * ])
 *
 * Class SubjectCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subject
 **/
class SubjectCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SubjectCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'subject',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            $data
        );
    }
}