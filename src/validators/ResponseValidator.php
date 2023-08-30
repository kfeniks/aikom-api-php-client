<?php
declare(strict_types=1);

namespace Aikom\validators;

use Aikom\valueObjects\ErrorResponse;

/**
 * Class ResponseValidator
 * @version 1.0.0
 * @access public
 * @package Aikom\validators
 **/
class ResponseValidator
{
    /**
     * @param array $response
     * @return bool
     */
    public function validateError(array $response): bool
    {
        foreach (ErrorResponse::fields() as $field) {
            if (!isset($response[$field])) {
                return false;
            }
        }

        return true;
    }
}