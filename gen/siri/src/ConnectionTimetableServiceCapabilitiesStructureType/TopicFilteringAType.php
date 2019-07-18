<?php

namespace Calcinai\Siri\ConnectionTimetableServiceCapabilitiesStructureType;

/**
 * Class representing TopicFilteringAType
 */
class TopicFilteringAType
{

    /**
     * @property bool $filterByLineRef
     */
    private $filterByLineRef = null;

    /**
     * Whether results can be filtered by Connectio link. Default true
     *
     * @property bool $filterByConnectionLinkRef
     */
    private $filterByConnectionLinkRef = null;

    /**
     * Gets as filterByLineRef
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
     * @param bool $filterByLineRef
     * @return self
     */
    public function setFilterByLineRef($filterByLineRef)
    {
        $this->filterByLineRef = $filterByLineRef;
        return $this;
    }

    /**
     * Gets as filterByConnectionLinkRef
     *
     * Whether results can be filtered by Connectio link. Default true
     *
     * @return bool
     */
    public function getFilterByConnectionLinkRef()
    {
        return $this->filterByConnectionLinkRef;
    }

    /**
     * Sets a new filterByConnectionLinkRef
     *
     * Whether results can be filtered by Connectio link. Default true
     *
     * @param bool $filterByConnectionLinkRef
     * @return self
     */
    public function setFilterByConnectionLinkRef($filterByConnectionLinkRef)
    {
        $this->filterByConnectionLinkRef = $filterByConnectionLinkRef;
        return $this;
    }


}

