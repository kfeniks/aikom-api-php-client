<?php
declare(strict_types=1);

namespace Aikom\context\scenario\personnel;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class PersonnelCreateAllEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\personnel
 **/
class PersonnelCreateAllEndpoint extends BasicRequestScenario
{
    /**
     * Constructor PersonnelCreateAllEndpoint
     */
    public function __construct(array $data)
    {
        $filteredData['personnel'] = [];
        foreach ($data as $row) {
            $filteredData['personnel'][] = (object)$row;
        }

        parent::__construct(
            'personnel/create-all',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            $filteredData
        );
    }
}