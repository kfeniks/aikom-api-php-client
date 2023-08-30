<?php
declare(strict_types=1);

namespace Aikom\context\scenario\lesson;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class LessonIndexEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\lesson
 **/
class LessonIndexEndpoint extends BasicRequestScenario
{
    /**
     * Constructor LessonIndexEndpoint
     */
    public function __construct()
    {
        parent::__construct(
            'lesson',
            RequestMethodsEnum::REQUEST_METHOD_GET,
            []
        );
    }
}