<?php
declare(strict_types=1);

namespace Aikom\handlers;

use Aikom\validators\ResponseValidator;

/**
 * Class ResponseHandler
 * @version 1.0.0
 * @access public
 * @package Aikom\handlers
 **/
abstract class ResponseHandler
{
    /*
     * @var ResponseValidator
     */
    private ResponseValidator $validator;

    /**
     * Constructor ResponseHandler
     * @param ResponseValidator $validator
     */
    public function __construct(ResponseValidator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @return ResponseValidator
     */
    public function getValidator(): ResponseValidator
    {
        return $this->validator;
    }

    /**
     * @param array $response
     * @return void
     */
    abstract public function handle(array $response): void;
}