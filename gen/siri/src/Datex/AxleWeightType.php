<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AxleWeightType
 *
 * The weight details of a specific axle set of an individual vehicle.
 * XSD Type: AxleWeight
 */
class AxleWeightType
{

    /**
     * Indicates the sequence of the axle set of the individual vehicle numbered from front to back (e.g. 1, 2, 3...).
     *
     * @property int $axleSequenceIdentifier
     */
    private $axleSequenceIdentifier = null;

    /**
     * The weight of the axle, indicated by the axleSequenceIdentifier, of an individual vehicle numbered from front to back of this vehicle.
     *
     * @property float $axleWeight
     */
    private $axleWeight = null;

    /**
     * The maximum permitted weight of any individual axle on the vehicle.
     *
     * @property float $maximumPermittedAxleWeight
     */
    private $maximumPermittedAxleWeight = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $axleWeightExtension
     */
    private $axleWeightExtension = null;

    /**
     * Gets as axleSequenceIdentifier
     *
     * Indicates the sequence of the axle set of the individual vehicle numbered from front to back (e.g. 1, 2, 3...).
     *
     * @return int
     */
    public function getAxleSequenceIdentifier()
    {
        return $this->axleSequenceIdentifier;
    }

    /**
     * Sets a new axleSequenceIdentifier
     *
     * Indicates the sequence of the axle set of the individual vehicle numbered from front to back (e.g. 1, 2, 3...).
     *
     * @param int $axleSequenceIdentifier
     * @return self
     */
    public function setAxleSequenceIdentifier($axleSequenceIdentifier)
    {
        $this->axleSequenceIdentifier = $axleSequenceIdentifier;
        return $this;
    }

    /**
     * Gets as axleWeight
     *
     * The weight of the axle, indicated by the axleSequenceIdentifier, of an individual vehicle numbered from front to back of this vehicle.
     *
     * @return float
     */
    public function getAxleWeight()
    {
        return $this->axleWeight;
    }

    /**
     * Sets a new axleWeight
     *
     * The weight of the axle, indicated by the axleSequenceIdentifier, of an individual vehicle numbered from front to back of this vehicle.
     *
     * @param float $axleWeight
     * @return self
     */
    public function setAxleWeight($axleWeight)
    {
        $this->axleWeight = $axleWeight;
        return $this;
    }

    /**
     * Gets as maximumPermittedAxleWeight
     *
     * The maximum permitted weight of any individual axle on the vehicle.
     *
     * @return float
     */
    public function getMaximumPermittedAxleWeight()
    {
        return $this->maximumPermittedAxleWeight;
    }

    /**
     * Sets a new maximumPermittedAxleWeight
     *
     * The maximum permitted weight of any individual axle on the vehicle.
     *
     * @param float $maximumPermittedAxleWeight
     * @return self
     */
    public function setMaximumPermittedAxleWeight($maximumPermittedAxleWeight)
    {
        $this->maximumPermittedAxleWeight = $maximumPermittedAxleWeight;
        return $this;
    }

    /**
     * Gets as axleWeightExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAxleWeightExtension()
    {
        return $this->axleWeightExtension;
    }

    /**
     * Sets a new axleWeightExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $axleWeightExtension
     * @return self
     */
    public function setAxleWeightExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $axleWeightExtension)
    {
        $this->axleWeightExtension = $axleWeightExtension;
        return $this;
    }


}

