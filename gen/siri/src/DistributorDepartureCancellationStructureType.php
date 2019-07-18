<?php

namespace Calcinai\Siri;

/**
 * Class representing DistributorDepartureCancellationStructureType
 *
 * Type for Cancellation of a Distributor vehicle journey from a connection.
 * XSD Type: DistributorDepartureCancellationStructure
 */
class DistributorDepartureCancellationStructureType extends AbstractDistributorItemStructureType
{

    /**
     * Reason for failure of connection.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $reason
     */
    private $reason = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as reason
     *
     * Reason for failure of connection.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Reason for failure of connection.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $reason
     * @return self
     */
    public function setReason(\Calcinai\Siri\NaturalLanguageStringStructureType $reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

