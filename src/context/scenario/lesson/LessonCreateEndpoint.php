<?php
declare(strict_types=1);

namespace Aikom\context\scenario\lesson;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * how to use:
 * new class([
 * "personal_id": 5442233,
 * "class_id": 8835889,
 * "subgroup_id": null,
 * "room_id": 19154371,
 * "buzzer_id": 7876991,
 * "predmet_id": 30631728,
 * "lesson_type_id": 110,
 * "lesson_date": "2020-01-03",
 * "lesson_topic": "1",
 * "lesson_description": null,
 * "lesson_number_in_plan": 1,
 * "hometask": null,
 * "hometask_to": null,
 * "hometask_history": null
 * ])
 * Class LessonCreateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\lesson
 **/
class LessonCreateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor LessonCreateEndpoint
     */
    public function __construct(array $data)
    {
        parent::__construct(
            'lesson',
            RequestMethodsEnum::REQUEST_METHOD_POST,
            $data
        );
    }
}