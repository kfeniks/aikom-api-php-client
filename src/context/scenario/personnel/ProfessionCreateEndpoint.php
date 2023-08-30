<?php
declare(strict_types=1);

namespace Aikom\context\scenario\personnel;

use Aikom\context\scenario\BasicRequestScenario;

/**
 * how to use:
 * new class([
 * 'firstname' => 'string',
 * 'lastname' => 'string',
 * 'personal_birth' => 'string',
 * ])
 * Class ProfessionCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\personnel
 **/
class ProfessionCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor ProfessionCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'personnel',
            'POST',
            $data
        );
    }
}