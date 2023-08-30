<?php
declare(strict_types=1);

namespace Aikom\valueObjects;

/**
 * Class ErrorResponse
 * @version 1.0.0
 * @access public
 * @package Aikom\valueObjects
 **/
class ErrorResponse
{
    public string $name;
    public string $message;
    public int $code;
    public int $status;
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
     * @return string[]
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

    public function getName(): string
    {
        return $this->name;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getType(): string
    {
        return $this->type;
    }
}