<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing AbstractRequestStructureType
 *
 * Type for General SIRI Request.
 * XSD Type: AbstractRequestStructure
 */
class AbstractRequestStructureType
{

    /**
     * @property \DateTime $requestTimestamp
     */
    private $requestTimestamp = null;

    /**
     * Gets as requestTimestamp
     *
     * @return \DateTime
     */
    public function getRequestTimestamp()
    {
        return $this->requestTimestamp;
    }

    /**
     * Sets a new requestTimestamp
     *
     * @param \DateTime $requestTimestamp
     * @return self
     */
    public function setRequestTimestamp(\DateTime $requestTimestamp)
    {
        $this->requestTimestamp = $requestTimestamp;
        return $this;
    }


}

