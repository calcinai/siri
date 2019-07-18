<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $reason
     */
    private $reason = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as reason
     *
     * Reason for failure of connection.
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
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
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $reason
     * @return self
     */
    public function setReason(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

