<?php
declare(strict_types=1);

namespace Aikom\context\scenario\lesson;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class LessonUpdateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\lesson
 **/
class LessonUpdateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor LessonUpdateEndpoint
     */
    public function __construct(int $id, array $data)
    {
        parent::__construct(
            'lesson/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_PUT,
            $data
        );
    }
}