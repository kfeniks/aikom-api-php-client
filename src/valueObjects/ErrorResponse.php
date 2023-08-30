<?php
declare(strict_types=1);

namespace Aikom\valueObjects;

use Aikom\context\interfaces\FieldsAvailable;

/**
 * Class ErrorResponse
 * @version 1.0.0
 * @access public
 * @package Aikom\valueObjects
 **/
class ErrorResponse implements FieldsAvailable
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $message;
    /**
     * @var int
     */
    public int $code;
    /**
     * @var int
     */
    public int $status;
    /**
     * @var string
     */
    public string $type;

    /**
     * @param string $name
     * @param string $message
     * @param int $code
     * @param int $status
     * @param string $type
     */
    public function __construct(
        string $name,
        string $message,
        int $code,
        int $status,
        string $type
    )
    {
        $this->name = $name;
        $this->message = $message;
        $this->code = $code;
        $this->status = $status;
        $this->type = $type;
    }

    /**
     * @inheritDoc
     */
    public static function fields(): array
    {
        return [
            'name',
            'message',
            'code',
            'status',
            'type',
        ];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}