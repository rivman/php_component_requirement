<?php

namespace Net\Bazzline\Component\Requirement;

/**
 * Class RequirementInterface
 *
 * @package Net\Bazzline\Component\Requirement
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2013-06-25
 */
interface IsMetInterface
{
    /**
     * Validates if given requirement is met
     *
     * @return boolean
     * @throws \RuntimeException
     * @author stev leibelt <artodeto@bazzline.net>
     * @since 2013-06-25
     */
    public function isMet();
}