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
    private string $endpoint = '';
    /**
     * @var string
     */
    private string $method = 'GET';
    /**
     * @var array
     */
    private array $data = [];

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