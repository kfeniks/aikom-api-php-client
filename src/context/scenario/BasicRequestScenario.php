<?php
declare(strict_types=1);

namespace Aikom\context\scenario;

/**
 * Class BasicRequestScenario
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario
 **/
abstract class BasicRequestScenario
{
    /**
     * @var string
     */
    private string $endpoint;
    /**
     * @var string
     */
    private string $method;
    /**
     * @var array
     */
    private array $data;

    /**
     * Constructor BasicRequestScenario
     * @param string $endpoint
     * @param string $method
     * @param array $data
     */
    public function __construct(
        string $endpoint,
        string $method,
        array $data
    )
    {
        $this->endpoint = $endpoint;
        $this->method = $method;
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}