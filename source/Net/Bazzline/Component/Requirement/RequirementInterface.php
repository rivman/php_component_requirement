<?php

namespace Net\Bazzline\Component\Requirement;

/**
 * Class RequirementInterface
 *
 * @package Net\Bazzline\Component\Requirement
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-06-25
 */
interface RequirementInterface extends IsMetInterface
{
    /**
     * @param ItemInterface $item
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-06-25
     */
    public function addItem(ItemInterface $item);

    /**
     * @param ItemCollectionInterface $collection
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-06-25
     */
    public function addCollection(ItemCollectionInterface $collection);
}