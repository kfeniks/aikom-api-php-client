<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subject;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class SubjectViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subject
 **/
class SubjectViewEndpoint extends GetRequestScenario
{
    /**
     * Constructor SubjectViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('subject/' . $id);
    }
}