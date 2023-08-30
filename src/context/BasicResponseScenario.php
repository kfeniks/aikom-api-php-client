<?php
declare(strict_types=1);

namespace Aikom\context;

/**
 * Class BasicResponseScenario
 * @version 1.0.0
 * @access public
 * @package Aikom\context
 **/
class BasicResponseScenario
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var array
     */
    private array $fields;

    /**
     * BasicResponseScenario constructor.
     * @param string $name
     * @param array $fields
     */
    public function __construct(string $name, array $fields = array())
    {
        $this->name = $name;
        $this->fields = $fields;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }
}