<?php
declare(strict_types=1);

namespace Aikom\context\scenario\mark;

use Aikom\context\scenario\DeleteRequestScenario;

/**
 * Class MarkDeleteEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\mark
 **/
class MarkDeleteEndpoint extends DeleteRequestScenario
{
    /**
     * Constructor MarkDeleteEndpoint
     */
    public function __construct(int $id)
    {
        parent::__construct('mark/' . $id);
    }
}