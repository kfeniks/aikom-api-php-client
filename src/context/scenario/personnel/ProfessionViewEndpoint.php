<?php
declare(strict_types=1);

namespace Aikom\context\scenario\personnel;

use Aikom\context\scenario\BasicRequestScenario;
use Aikom\context\enums\RequestMethodsEnum;

/**
 * Class ProfessionViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\personnel
 **/
class ProfessionViewEndpoint extends BasicRequestScenario
{
    /**
     * Constructor ProfessionViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct(
            'personnel/profession/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}