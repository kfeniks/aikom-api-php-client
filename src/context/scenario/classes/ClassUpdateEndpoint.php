<?php
declare(strict_types=1);

namespace Aikom\context\scenario\classes;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class ClassUpdateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\classes
 **/
class ClassUpdateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor ClassUpdateEndpoint
     */
    public function __construct(int $id, array $data)
    {
        parent::__construct(
            'class/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_PUT,
            $data
        );
    }
}