<?php
declare(strict_types=1);

namespace Aikom\builders;

use Aikom\context\interfaces\FieldsAvailable;
use Aikom\valueObjects\Profession;

/**
 * Class ProfessionBuilder
 * @version 1.0.0
 * @access public
 * @package Aikom\builders
 **/
class ProfessionBuilder extends BasicBuilder
{
    /**
     * @param array $rows
     * @return FieldsAvailable|Profession
     */
    public function build(array $rows): FieldsAvailable
    {
        return new Profession(
            $rows['id_prof'],
            $rows['name_prof']
        );
    }
}