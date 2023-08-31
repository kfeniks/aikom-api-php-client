<?php
declare(strict_types=1);

namespace Aikom\context\scenario\lesson;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class LessonTypeListEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\lesson
 **/
class LessonTypeListEndpoint extends GetRequestScenario
{
    /**
     * Constructor LessonTypeListEndpoint
     */
    public function __construct()
    {
        parent::__construct('lesson/lesson-type-list');
    }
}