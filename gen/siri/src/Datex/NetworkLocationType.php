<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing NetworkLocationType
 *
 * The specification of a location on a network (as a point or a linear location).
 * XSD Type: NetworkLocation
 */
class NetworkLocationType extends LocationType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\SupplementaryPositionalDescriptionType $supplementaryPositionalDescription
     */
    private $supplementaryPositionalDescription = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\DestinationType $destination
     */
    private $destination = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $networkLocationExtension
     */
    private $networkLocationExtension = null;

    /**
     * Gets as supplementaryPositionalDescription
     *
     * @return \Calcinai\Siri\Objects\Datex\SupplementaryPositionalDescriptionType
     */
    public function getSupplementaryPositionalDescription()
    {
        return $this->supplementaryPositionalDescription;
    }

    /**
     * Sets a new supplementaryPositionalDescription
     *
     * @param \Calcinai\Siri\Objects\Datex\SupplementaryPositionalDescriptionType $supplementaryPositionalDescription
     * @return self
     */
    public function setSupplementaryPositionalDescription(\Calcinai\Siri\Objects\Datex\SupplementaryPositionalDescriptionType $supplementaryPositionalDescription)
    {
        $this->supplementaryPositionalDescription = $supplementaryPositionalDescription;
        return $this;
    }

    /**
     * Gets as destination
     *
     * @return \Calcinai\Siri\Objects\Datex\DestinationType
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * @param \Calcinai\Siri\Objects\Datex\DestinationType $destination
     * @return self
     */
    public function setDestination(\Calcinai\Siri\Objects\Datex\DestinationType $destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Gets as networkLocationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getNetworkLocationExtension()
    {
        return $this->networkLocationExtension;
    }

    /**
     * Sets a new networkLocationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $networkLocationExtension
     * @return self
     */
    public function setNetworkLocationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $networkLocationExtension)
    {
        $this->networkLocationExtension = $networkLocationExtension;
        return $this;
    }


}

