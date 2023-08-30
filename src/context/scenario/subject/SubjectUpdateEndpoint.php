<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subject;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class SubjectUpdateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subject
 **/
class SubjectUpdateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SubjectUpdateEndpoint
     */
    public function __construct(int $id, array $data)
    {
        parent::__construct(
            'subject/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_PUT,
            $data
        );
    }
}