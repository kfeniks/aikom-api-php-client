<?php
declare(strict_types=1);

namespace Aikom\context\scenario\classes;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * how to use:
 * new class([
 * "personal_id": 5477387,
 * "smena_id": 1193087,
 * "name": "3-А"
 * ])
 * Class ClassCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\classes
 **/
class ClassCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor ClassCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'class',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            $data
        );
    }
}