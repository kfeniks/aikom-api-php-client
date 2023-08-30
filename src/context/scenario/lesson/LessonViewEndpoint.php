<?php
declare(strict_types=1);

namespace Aikom\context\scenario\lesson;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class LessonViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\lesson
 **/
class LessonViewEndpoint extends BasicRequestScenario
{
    /**
     * Constructor LessonViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct(
            'lesson/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}