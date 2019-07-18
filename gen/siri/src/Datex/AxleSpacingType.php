<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AxleSpacingType
 *
 * The spacing details between the axle sets of an individual vehicle numbered from the front to the back of the vehicle.
 * XSD Type: AxleSpacing
 */
class AxleSpacingType
{

    /**
     * The spacing interval, indicated by the axleSpacingSequenceIdentifier, between the axles of an individual vehicle from front to back of the vehicle.
     *
     * @property float $axleSpacing
     */
    private $axleSpacing = null;

    /**
     * Indicates the sequence of intervals between the axles of the individual vehicle from front to back (e.g. 1, 2, 3...).
     *
     * @property int $axleSpacingSequenceIdentifier
     */
    private $axleSpacingSequenceIdentifier = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $axleSpacingExtension
     */
    private $axleSpacingExtension = null;

    /**
     * Gets as axleSpacing
     *
     * The spacing interval, indicated by the axleSpacingSequenceIdentifier, between the axles of an individual vehicle from front to back of the vehicle.
     *
     * @return float
     */
    public function getAxleSpacing()
    {
        return $this->axleSpacing;
    }

    /**
     * Sets a new axleSpacing
     *
     * The spacing interval, indicated by the axleSpacingSequenceIdentifier, between the axles of an individual vehicle from front to back of the vehicle.
     *
     * @param float $axleSpacing
     * @return self
     */
    public function setAxleSpacing($axleSpacing)
    {
        $this->axleSpacing = $axleSpacing;
        return $this;
    }

    /**
     * Gets as axleSpacingSequenceIdentifier
     *
     * Indicates the sequence of intervals between the axles of the individual vehicle from front to back (e.g. 1, 2, 3...).
     *
     * @return int
     */
    public function getAxleSpacingSequenceIdentifier()
    {
        return $this->axleSpacingSequenceIdentifier;
    }

    /**
     * Sets a new axleSpacingSequenceIdentifier
     *
     * Indicates the sequence of intervals between the axles of the individual vehicle from front to back (e.g. 1, 2, 3...).
     *
     * @param int $axleSpacingSequenceIdentifier
     * @return self
     */
    public function setAxleSpacingSequenceIdentifier($axleSpacingSequenceIdentifier)
    {
        $this->axleSpacingSequenceIdentifier = $axleSpacingSequenceIdentifier;
        return $this;
    }

    /**
     * Gets as axleSpacingExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAxleSpacingExtension()
    {
        return $this->axleSpacingExtension;
    }

    /**
     * Sets a new axleSpacingExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $axleSpacingExtension
     * @return self
     */
    public function setAxleSpacingExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $axleSpacingExtension)
    {
        $this->axleSpacingExtension = $axleSpacingExtension;
        return $this;
    }


}

