<?php
declare(strict_types=1);

namespace Aikom\context\scenario\personnel;

use Aikom\context\scenario\BasicRequestScenario;
use Aikom\context\enums\RequestMethodsEnum;

/**
 * Class ProfessionListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\personnel
 **/
class ProfessionListEndpoint extends BasicRequestScenario
{
    /**
     * Constructor ProfessionListEndpoint
     */
    public function __construct()
    {
        parent::__construct(
            'personnel/profession-list',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}