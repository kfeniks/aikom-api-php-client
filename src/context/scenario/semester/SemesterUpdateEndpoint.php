<?php
declare(strict_types=1);

namespace Aikom\context\scenario\semester;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * How to use:
 * new class([
 * "start_date": "2031-01-01",
 * "end_date": "2031-08-20",
 * "is_current": true
 * ])
 * Class SemesterUpdateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\semester
 **/
class SemesterUpdateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor SemesterUpdateEndpoint
     */
    public function __construct(int $id, array $data)
    {
        parent::__construct(
            'semester/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_PUT,
            $data
        );
    }
}