<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ReroutingType
 *
 * An action which involves diverting traffic, whether mandatory or advisory.
 * XSD Type: Rerouting
 */
class ReroutingType extends TrafficControlType
{

    /**
     * Indicates whether a signed alternative route is available.
     *
     * @property bool $alternativeRerouting
     */
    private $alternativeRerouting = null;

    /**
     * A description of the rerouting itinerary.
     *
     * @property \Calcinai\Siri\Objects\Datex\ReroutingType\ReroutingItineraryDescriptionAType\ValueAType[] $reroutingItineraryDescription
     */
    private $reroutingItineraryDescription = null;

    /**
     * The type of rerouting that is in force defining whether the alternative route commences at the specified entry or exit of the defined road or at the specified intersecting road or junction.
     *
     * @property string $reroutingType
     */
    private $reroutingType = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $reroutingExtension
     */
    private $reroutingExtension = null;

    /**
     * Gets as alternativeRerouting
     *
     * Indicates whether a signed alternative route is available.
     *
     * @return bool
     */
    public function getAlternativeRerouting()
    {
        return $this->alternativeRerouting;
    }

    /**
     * Sets a new alternativeRerouting
     *
     * Indicates whether a signed alternative route is available.
     *
     * @param bool $alternativeRerouting
     * @return self
     */
    public function setAlternativeRerouting($alternativeRerouting)
    {
        $this->alternativeRerouting = $alternativeRerouting;
        return $this;
    }

    /**
     * Adds as value
     *
     * A description of the rerouting itinerary.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\ReroutingType\ReroutingItineraryDescriptionAType\ValueAType $value
     */
    public function addToReroutingItineraryDescription(\Calcinai\Siri\Objects\Datex\ReroutingType\ReroutingItineraryDescriptionAType\ValueAType $value)
    {
        $this->reroutingItineraryDescription[] = $value;
        return $this;
    }

    /**
     * isset reroutingItineraryDescription
     *
     * A description of the rerouting itinerary.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReroutingItineraryDescription($index)
    {
        return isset($this->reroutingItineraryDescription[$index]);
    }

    /**
     * unset reroutingItineraryDescription
     *
     * A description of the rerouting itinerary.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReroutingItineraryDescription($index)
    {
        unset($this->reroutingItineraryDescription[$index]);
    }

    /**
     * Gets as reroutingItineraryDescription
     *
     * A description of the rerouting itinerary.
     *
     * @return \Calcinai\Siri\Objects\Datex\ReroutingType\ReroutingItineraryDescriptionAType\ValueAType[]
     */
    public function getReroutingItineraryDescription()
    {
        return $this->reroutingItineraryDescription;
    }

    /**
     * Sets a new reroutingItineraryDescription
     *
     * A description of the rerouting itinerary.
     *
     * @param \Calcinai\Siri\Objects\Datex\ReroutingType\ReroutingItineraryDescriptionAType\ValueAType[] $reroutingItineraryDescription
     * @return self
     */
    public function setReroutingItineraryDescription(array $reroutingItineraryDescription)
    {
        $this->reroutingItineraryDescription = $reroutingItineraryDescription;
        return $this;
    }

    /**
     * Gets as reroutingType
     *
     * The type of rerouting that is in force defining whether the alternative route commences at the specified entry or exit of the defined road or at the specified intersecting road or junction.
     *
     * @return string
     */
    public function getReroutingType()
    {
        return $this->reroutingType;
    }

    /**
     * Sets a new reroutingType
     *
     * The type of rerouting that is in force defining whether the alternative route commences at the specified entry or exit of the defined road or at the specified intersecting road or junction.
     *
     * @param string $reroutingType
     * @return self
     */
    public function setReroutingType($reroutingType)
    {
        $this->reroutingType = $reroutingType;
        return $this;
    }

    /**
     * Gets as reroutingExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getReroutingExtension()
    {
        return $this->reroutingExtension;
    }

    /**
     * Sets a new reroutingExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $reroutingExtension
     * @return self
     */
    public function setReroutingExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $reroutingExtension)
    {
        $this->reroutingExtension = $reroutingExtension;
        return $this;
    }


}

