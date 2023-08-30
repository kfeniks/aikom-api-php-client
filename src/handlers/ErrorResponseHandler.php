<?php
declare(strict_types=1);

namespace Aikom\handlers;

use Aikom\valueObjects\ErrorResponse;

/**
 * Class ErrorResponseHandler
 * @version 1.0.0
 * @access public
 * @package Aikom\handlers
 **/
class ErrorResponseHandler extends ResponseHandler
{
    /**
     * @inheritDoc
     */
    public function handle(array $response): void
    {
        if ($this->getValidator()->validate($response)) {
            $errorEntity = new ErrorResponse(
                $response['name'],
                $response['message'],
                $response['code'],
                $response['status'],
                $response['type']
            );

            throw new \Exception($errorEntity->getMessage());
        }
    }
}