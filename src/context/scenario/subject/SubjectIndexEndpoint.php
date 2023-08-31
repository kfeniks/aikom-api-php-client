<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subject;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class SubjectIndexEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subject
 **/
class SubjectIndexEndpoint extends GetRequestScenario
{
    /**
     * Constructor SubjectIndexEndpoint
     */
    public function __construct()
    {
        parent::__construct('subject');
    }
}