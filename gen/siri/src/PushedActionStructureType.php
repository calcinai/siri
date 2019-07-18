<?php

namespace Calcinai\Siri;

/**
 * Class representing PushedActionStructureType
 *
 * Type for publication action.
 * XSD Type: PushedActionStructure
 */
class PushedActionStructureType extends ParameterisedActionStructureType
{

    /**
     * Whether reminders should be sent.
     *
     * @property \DateInterval[] $beforeNotices
     */
    private $beforeNotices = null;

    /**
     * Whether a clearing notice should be displayed.
     *
     * @property bool $clearNotice
     */
    private $clearNotice = null;

    /**
     * Adds as interval
     *
     * Whether reminders should be sent.
     *
     * @return self
     * @param \DateInterval $interval
     */
    public function addToBeforeNotices(\DateInterval $interval)
    {
        $this->beforeNotices[] = $interval;
        return $this;
    }

    /**
     * isset beforeNotices
     *
     * Whether reminders should be sent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBeforeNotices($index)
    {
        return isset($this->beforeNotices[$index]);
    }

    /**
     * unset beforeNotices
     *
     * Whether reminders should be sent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBeforeNotices($index)
    {
        unset($this->beforeNotices[$index]);
    }

    /**
     * Gets as beforeNotices
     *
     * Whether reminders should be sent.
     *
     * @return \DateInterval[]
     */
    public function getBeforeNotices()
    {
        return $this->beforeNotices;
    }

    /**
     * Sets a new beforeNotices
     *
     * Whether reminders should be sent.
     *
     * @param \DateInterval $beforeNotices
     * @return self
     */
    public function setBeforeNotices(array $beforeNotices)
    {
        $this->beforeNotices = $beforeNotices;
        return $this;
    }

    /**
     * Gets as clearNotice
     *
     * Whether a clearing notice should be displayed.
     *
     * @return bool
     */
    public function getClearNotice()
    {
        return $this->clearNotice;
    }

    /**
     * Sets a new clearNotice
     *
     * Whether a clearing notice should be displayed.
     *
     * @param bool $clearNotice
     * @return self
     */
    public function setClearNotice($clearNotice)
    {
        $this->clearNotice = $clearNotice;
        return $this;
    }


}

