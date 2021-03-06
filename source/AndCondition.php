<?php

namespace Net\Bazzline\Component\Requirement;

use RuntimeException;

/**
 * Class AndCondition
 *
 * @package Net\Bazzline\Component\Requirement
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2013-06-25
 */
class AndCondition extends AbstractCondition
{
    /**
     * {$inheritdoc}
     */
    public function isMet()
    {
        if ($this->isDisabled()) {
            return $this->getReturnValueIfIsDisabled();
        } else {
            if ($this->items->count() == 0) {
                throw new RuntimeException('No items set in this condition.');
            }

            foreach ($this->items as $item) {
                if (!$item->isMet()) {
                    return false;
                }
            }

            return true;
        }
    }
}