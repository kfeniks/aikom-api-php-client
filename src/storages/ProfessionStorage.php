<?php
declare(strict_types=1);

namespace Aikom\storages;

use Aikom\valueObjects\Profession;

/**
 * Class ProfessionStorage
 * @version 1.0.0
 * @access public
 * @package Aikom\storages
 **/
class ProfessionStorage extends BasicStorage
{
    /**
     * @param Profession $object
     * @param $info
     * @return void
     */
    public function attach($object, $info = null): void
    {
        if ($object instanceof Profession) {
            parent::attach($object);
        }
    }
}