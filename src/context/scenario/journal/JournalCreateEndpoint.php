<?php
declare(strict_types=1);

namespace Aikom\context\scenario\journal;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * how to use:
 * new class([
 * "semester_id": 945417,
 * "class_id": 8835890,
 * "predmet_id": 30631728,
 * "subgroup_id": null,
 * "personal_id": 5442233,
 * "second_personal_id": 5477284,
 * "last_used": "2021-03-10 10:33:16"
 * ])
 * or
 * new class([
 * "school_id": 23808,
 * "semester_id": 945417,
 * "class_id": 8835890,
 * "predmet_id": 30631729,
 * "personal_id": 5442233,
 * "second_personal_id": null,
 * "last_used": "2021-03-01 16:03:55",
 * "subgroup": {
 * "name": "3",
 * "students": [{"student_id": 39605880}]
 * }
 * ])
 *
 * Class JournalCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\journal
 **/
class JournalCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor JournalCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'journal',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            $data
        );
    }
}