<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2013-06-26 
 */

namespace Example\Table\Items;

/**
 * Class RedColor
 *
 * @package Example\Table\Items
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2013-06-26
 */
class RedColor extends Color
{
    /**
     * @author stev leibelt <artodeto@bazzline.net>
     * @since 2013-06-26
     */
    public function __construct()
    {
        $this->expectedColor = 'red';
    }
}