<?php
declare(strict_types=1);

namespace Aikom\context\scenario\subject;

use Aikom\context\scenario\DeleteRequestScenario;

/**
 * Class SubjectDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\subject
 **/
class SubjectDeleteEndpoint extends DeleteRequestScenario
{
    /**
     * Constructor SubjectDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('subject/' . $id);
    }
}