<?php

namespace Calcinai\Siri\Objects\EstimatedTimetableServiceCapabilitiesStructureType;

/**
 * Class representing TopicFilteringAType
 */
class TopicFilteringAType
{

    /**
     * Whether results can be filtered by Time of Connection. Default true
     *
     * @property bool $filterByOperatorRef
     */
    private $filterByOperatorRef = null;

    /**
     * Whether results can be filtered by Journey
     *
     * @property bool $filterByLineRef
     */
    private $filterByLineRef = null;

    /**
     * Gets as filterByOperatorRef
     *
     * Whether results can be filtered by Time of Connection. Default true
     *
     * @return bool
     */
    public function getFilterByOperatorRef()
    {
        return $this->filterByOperatorRef;
    }

    /**
     * Sets a new filterByOperatorRef
     *
     * Whether results can be filtered by Time of Connection. Default true
     *
     * @param bool $filterByOperatorRef
     * @return self
     */
    public function setFilterByOperatorRef($filterByOperatorRef)
    {
        $this->filterByOperatorRef = $filterByOperatorRef;
        return $this;
    }

    /**
     * Gets as filterByLineRef
     *
     * Whether results can be filtered by Journey
     *
     * @return bool
     */
    public function getFilterByLineRef()
    {
        return $this->filterByLineRef;
    }

    /**
     * Sets a new filterByLineRef
     *
     * Whether results can be filtered by Journey
     *
     * @param bool $filterByLineRef
     * @return self
     */
    public function setFilterByLineRef($filterByLineRef)
    {
        $this->filterByLineRef = $filterByLineRef;
        return $this;
    }


}

