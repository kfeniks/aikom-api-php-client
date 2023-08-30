<?php
declare(strict_types=1);

namespace Aikom\context\scenario\personnel;

use Aikom\context\scenario\BasicRequestScenario;
use Aikom\context\enums\RequestMethodsEnum;

/**
 * Class PersonnelViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\personnel
 **/
class PersonnelViewEndpoint extends BasicRequestScenario
{
    /**
     * Constructor PersonnelViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct(
            'personnel/?id=' . $id,
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}