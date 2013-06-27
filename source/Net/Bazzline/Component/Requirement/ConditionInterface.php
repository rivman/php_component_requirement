<?php

namespace Net\Bazzline\Component\Requirement;

/**
 * Class Condition
 *
 * @package Net\Bazzline\Component\Requirement
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-06-25
 */
interface ConditionInterface
{
    /**
     * Adds an item to the condition.
     * If an instance is already added, it will be replaced.
     *
     * @param IsMetInterface $item
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-06-25
     */
    public function addItem(IsMetInterface $item);

    /**
     * Returns all added items as array
     *
     * @return \SplObjectStorage
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-06-25
     */
    public function getItems();
}