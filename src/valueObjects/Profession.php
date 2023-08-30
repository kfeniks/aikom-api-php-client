<?php
declare(strict_types=1);

namespace Aikom\valueObjects;

use Aikom\context\interfaces\FieldsAvailable;

/**
 * Class Profession
 * @version 1.0.0
 * @access public
 * @package Aikom\valueObjects
 **/
class Profession implements FieldsAvailable
{
    /**
     * @var string
     */
    public string $id_prof;
    /**
     * @var string
     */
    public string $name_prof;

    /**
     * Constructor Profession
     * @param string $id_prof
     * @param string $name_prof
     */
    public function __construct(
        string $id_prof,
        string $name_prof
    ) {
        $this->id_prof = $id_prof;
        $this->name_prof = $name_prof;
    }

    /**
     * @return string
     */
    public function getIdProf(): string
    {
        return $this->id_prof;
    }

    /**
     * @return string
     */
    public function getNameProf(): string
    {
        return $this->name_prof;
    }

    /**
     * @inheritDoc
     */
    public static function fields(): array
    {
        return [
            'id_prof',
            'name_prof'
        ];
    }
}