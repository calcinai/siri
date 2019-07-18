<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing PlacesType
 *
 * Supplementary places advice.
 * XSD Type: Places
 */
class PlacesType extends AdviceType
{

    /**
     * Additional information about places that can be provided to travellers.
     *
     * @property string $placesAdvice
     */
    private $placesAdvice = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $placesExtension
     */
    private $placesExtension = null;

    /**
     * Gets as placesAdvice
     *
     * Additional information about places that can be provided to travellers.
     *
     * @return string
     */
    public function getPlacesAdvice()
    {
        return $this->placesAdvice;
    }

    /**
     * Sets a new placesAdvice
     *
     * Additional information about places that can be provided to travellers.
     *
     * @param string $placesAdvice
     * @return self
     */
    public function setPlacesAdvice($placesAdvice)
    {
        $this->placesAdvice = $placesAdvice;
        return $this;
    }

    /**
     * Gets as placesExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getPlacesExtension()
    {
        return $this->placesExtension;
    }

    /**
     * Sets a new placesExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $placesExtension
     * @return self
     */
    public function setPlacesExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $placesExtension)
    {
        $this->placesExtension = $placesExtension;
        return $this;
    }


}

