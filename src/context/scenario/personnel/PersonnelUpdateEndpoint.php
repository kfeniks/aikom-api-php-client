<?php
declare(strict_types=1);

namespace Aikom\context\scenario\personnel;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class PersonnelUpdateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\personnel
 **/
class PersonnelUpdateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor PersonnelUpdateEndpoint
     */
    public function __construct(int $id, array $data)
    {
        parent::__construct(
            'personnel/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_PUT,
            $data
        );
    }
}