<?php
declare(strict_types=1);

namespace Aikom\context\interfaces;

/**
 * Interface FieldsAvailable
 * @version 1.0.0
 * @access public
 * @package Aikom\context\interfaces
 **/
interface FieldsAvailable
{
    /**
     * @return string[]
     */
    public static function fields(): array;
}