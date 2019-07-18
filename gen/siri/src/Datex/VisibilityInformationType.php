<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing VisibilityInformationType
 *
 * Measurements of atmospheric visibility.
 * XSD Type: VisibilityInformation
 */
class VisibilityInformationType extends WeatherValueType
{

    /**
     * @property \Calcinai\Siri\Datex\VisibilityType $visibility
     */
    private $visibility = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $visibilityInformationExtension
     */
    private $visibilityInformationExtension = null;

    /**
     * Gets as visibility
     *
     * @return \Calcinai\Siri\Datex\VisibilityType
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Sets a new visibility
     *
     * @param \Calcinai\Siri\Datex\VisibilityType $visibility
     * @return self
     */
    public function setVisibility(\Calcinai\Siri\Datex\VisibilityType $visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     * Gets as visibilityInformationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getVisibilityInformationExtension()
    {
        return $this->visibilityInformationExtension;
    }

    /**
     * Sets a new visibilityInformationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $visibilityInformationExtension
     * @return self
     */
    public function setVisibilityInformationExtension(\Calcinai\Siri\Datex\ExtensionType $visibilityInformationExtension)
    {
        $this->visibilityInformationExtension = $visibilityInformationExtension;
        return $this;
    }


}

