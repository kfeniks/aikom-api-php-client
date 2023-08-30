<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\ApiClient;

/**
 * Class BasicManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
abstract class BasicManager
{
    /**
     * @var ApiClient
     */
    private ApiClient $client;

    /**
     * Constructor BasicManager
     */
    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return ApiClient
     */
    public function getClient(): ApiClient
    {
        return $this->client;
    }
}