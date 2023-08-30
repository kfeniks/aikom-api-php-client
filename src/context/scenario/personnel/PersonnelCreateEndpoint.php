<?php
declare(strict_types=1);

namespace Aikom\context\scenario\personnel;

use Aikom\context\scenario\BasicRequestScenario;
use Aikom\context\enums\RequestMethodsEnum;

/**
 * how to use:
 * new class([
 * 'firstname' => 'string',
 * 'lastname' => 'string',
 * 'personal_birth' => 'string',
 * ])
 * Class PersonnelCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\personnel
 **/
class PersonnelCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor PersonnelCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'personnel',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            $data
        );
    }
}