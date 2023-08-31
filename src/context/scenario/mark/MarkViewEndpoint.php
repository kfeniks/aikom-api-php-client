<?php
declare(strict_types=1);

namespace Aikom\context\scenario\mark;

use Aikom\context\scenario\GetRequestScenario;

/**
 * Class MarkViewEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\mark
 **/
class MarkViewEndpoint extends GetRequestScenario
{
    /**
     * Constructor MarkViewEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('mark/' . $id);
    }
}