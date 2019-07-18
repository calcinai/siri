<?php

namespace Calcinai\Siri\Objects\GeneralMessageServiceCapabilitiesStructureType;

/**
 * Class representing TopicFilteringAType
 */
class TopicFilteringAType
{

    /**
     * Default preview interval. Default is 60 minutes.
     *
     * @property \DateInterval $defaultPreviewInterval
     */
    private $defaultPreviewInterval = null;

    /**
     * Whether results can be filtered by InfoChannel, departures. Default is true.
     *
     * @property bool $filterByInfoChannel
     */
    private $filterByInfoChannel = null;

    /**
     * Gets as defaultPreviewInterval
     *
     * Default preview interval. Default is 60 minutes.
     *
     * @return \DateInterval
     */
    public function getDefaultPreviewInterval()
    {
        return $this->defaultPreviewInterval;
    }

    /**
     * Sets a new defaultPreviewInterval
     *
     * Default preview interval. Default is 60 minutes.
     *
     * @param \DateInterval $defaultPreviewInterval
     * @return self
     */
    public function setDefaultPreviewInterval(\DateInterval $defaultPreviewInterval)
    {
        $this->defaultPreviewInterval = $defaultPreviewInterval;
        return $this;
    }

    /**
     * Gets as filterByInfoChannel
     *
     * Whether results can be filtered by InfoChannel, departures. Default is true.
     *
     * @return bool
     */
    public function getFilterByInfoChannel()
    {
        return $this->filterByInfoChannel;
    }

    /**
     * Sets a new filterByInfoChannel
     *
     * Whether results can be filtered by InfoChannel, departures. Default is true.
     *
     * @param bool $filterByInfoChannel
     * @return self
     */
    public function setFilterByInfoChannel($filterByInfoChannel)
    {
        $this->filterByInfoChannel = $filterByInfoChannel;
        return $this;
    }


}

