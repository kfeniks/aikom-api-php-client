<?php
declare(strict_types=1);

namespace Aikom\valueObjects;

/**
 * Class Personal
 * @version 1.0.0
 * @access public
 * @package Aikom\valueObjects
 **/
class Personal
{
    /**
     * @var int
     */
    private int $personal_id;
    /**
     * @var string
     */
    private string $firstname;
    /**
     * @var string
     */
    private string $lastname;
    /**
     * @var string
     */
    private string $patronymic;
    /**
     * @var int|null
     */
    private ?int $profession_id;
    /**
     * @var string
     */
    private string $personal_birth;
    /**
     * @var int
     */
    private int $sex;
    /**
     * @var int
     */
    private int $c_leave;
    /**
     * @var string
     */
    private string $created_at;
    /**
     * @var string
     */
    private string $updated_at;
    /**
     * @var string
     */
    private string $created_by;
    /**
     * @var string
     */
    private string $updated_by;

    /**
     * Constructor Personal
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->personal_id = $data['personal_id'];
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->patronymic = $data['patronymic'];
        $this->profession_id = $data['profession_id'];
        $this->personal_birth = $data['personal_birth'];
        $this->sex = $data['sex'];
        $this->c_leave = $data['c_leave'];
        $this->created_at = $data['created_at'];
        $this->updated_at = $data['updated_at'];
        $this->created_by = $data['created_by'];
        $this->updated_by = $data['updated_by'];
    }

    /**
     * @return int
     */
    public function getPersonalId(): int
    {
        return $this->personal_id;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getPatronymic(): string
    {
        return $this->patronymic;
    }

    /**
     * @return int|null
     */
    public function getProfessionId(): ?int
    {
        return $this->profession_id;
    }

    /**
     * @return string
     */
    public function getPersonalBirth(): string
    {
        return $this->personal_birth;
    }

    /**
     * @return int
     */
    public function getSex(): int
    {
        return $this->sex;
    }

    /**
     * @return int
     */
    public function getCLeave(): int
    {
        return $this->c_leave;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    /**
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->created_by;
    }

    /**
     * @return string
     */
    public function getUpdatedBy(): string
    {
        return $this->updated_by;
    }
}