<?php

namespace Calcinai\Siri;

/**
 * Class representing ResponseStructureType
 *
 * General Type for General SIRI Response.
 * XSD Type: ResponseStructure
 */
class ResponseStructureType
{

    /**
     * @property \DateTime $responseTimestamp
     */
    private $responseTimestamp = null;

    /**
     * Gets as responseTimestamp
     *
     * @return \DateTime
     */
    public function getResponseTimestamp()
    {
        return $this->responseTimestamp;
    }

    /**
     * Sets a new responseTimestamp
     *
     * @param \DateTime $responseTimestamp
     * @return self
     */
    public function setResponseTimestamp(\DateTime $responseTimestamp)
    {
        $this->responseTimestamp = $responseTimestamp;
        return $this;
    }


}

