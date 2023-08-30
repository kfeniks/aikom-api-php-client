<?php
declare(strict_types=1);

namespace Aikom\builders;

use Aikom\context\interfaces\FieldsAvailable;

/**
 * Class BasicBuilder
 * @version 1.0.0
 * @access public
 * @package Aikom\builders
 **/
abstract class BasicBuilder
{
    /**
     * @param array $rows
     * @return FieldsAvailable
     */
    abstract public function build(array $rows): FieldsAvailable;
}