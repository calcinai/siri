<?php

namespace Calcinai\Siri\ProductionTimetableServiceCapabilitiesStructureType;

/**
 * Class representing TopicFilteringAType
 */
class TopicFilteringAType
{

    /**
     * Whether results can be filtered by Time of Connection. Default true
     *
     * @property bool $filterByValidityPeriod
     */
    private $filterByValidityPeriod = null;

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
     * Whether results can be filtered by version Default is true.
     *
     * @property bool $filterByVersionRef
     */
    private $filterByVersionRef = null;

    /**
     * Gets as filterByValidityPeriod
     *
     * Whether results can be filtered by Time of Connection. Default true
     *
     * @return bool
     */
    public function getFilterByValidityPeriod()
    {
        return $this->filterByValidityPeriod;
    }

    /**
     * Sets a new filterByValidityPeriod
     *
     * Whether results can be filtered by Time of Connection. Default true
     *
     * @param bool $filterByValidityPeriod
     * @return self
     */
    public function setFilterByValidityPeriod($filterByValidityPeriod)
    {
        $this->filterByValidityPeriod = $filterByValidityPeriod;
        return $this;
    }

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

    /**
     * Gets as filterByVersionRef
     *
     * Whether results can be filtered by version Default is true.
     *
     * @return bool
     */
    public function getFilterByVersionRef()
    {
        return $this->filterByVersionRef;
    }

    /**
     * Sets a new filterByVersionRef
     *
     * Whether results can be filtered by version Default is true.
     *
     * @param bool $filterByVersionRef
     * @return self
     */
    public function setFilterByVersionRef($filterByVersionRef)
    {
        $this->filterByVersionRef = $filterByVersionRef;
        return $this;
    }


}

