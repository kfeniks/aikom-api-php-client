<?php
declare(strict_types=1);

namespace Aikom\collectors;

use Aikom\storages\BasicStorage;

/**
 * Class BasicCollector
 * @version 1.0.0
 * @access public
 * @package Aikom\collectors
 **/
abstract class BasicCollector
{
    /**
     * @var BasicStorage
     */
    private BasicStorage $storage;

    /**
     * BasicCollector constructor.
     * @param BasicStorage $storage
     */
    public function __construct(BasicStorage $storage)
    {
        $this->storage = $storage;
    }

    /**
     * @return BasicStorage
     */
    public function getStorage(): BasicStorage
    {
        return $this->storage;
    }
}