<?php
declare(strict_types=1);

namespace Aikom\context\scenario\mark;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class MarkIndexEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\mark
 **/
class MarkIndexEndpoint extends BasicRequestScenario
{
    /**
     * Constructor MarkIndexEndpoint
     */
    public function __construct()
    {
        parent::__construct(
            'mark',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}