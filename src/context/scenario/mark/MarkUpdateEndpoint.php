<?php
declare(strict_types=1);

namespace Aikom\context\scenario\mark;

use Aikom\context\enums\RequestMethodsEnum;
use Aikom\context\scenario\BasicRequestScenario;

/**
 * Class MarkUpdateEndpoint
 * @version 1.0.0
 * @access public
 * @package Aikom\context\scenario\mark
 **/
class MarkUpdateEndpoint extends BasicRequestScenario
{
    /**
     * Constructor MarkUpdateEndpoint
     */
    public function __construct(int $id, array $data)
    {
        parent::__construct(
            'mark/' . $id,
            RequestMethodsEnum::REQUEST_METHOD_PUT,
            $data
        );
    }
}