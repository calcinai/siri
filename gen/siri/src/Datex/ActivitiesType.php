<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ActivitiesType
 *
 * Deliberate human actions external to the traffic stream or roadway which could disrupt traffic.
 * XSD Type: Activities
 */
class ActivitiesType extends TrafficElementType
{

    /**
     * Indicates the nature of the authority-initiated activity that will, is or has been taking place.
     *
     * @property string[] $authorityOperationType
     */
    private $authorityOperationType = [
        
    ];

    /**
     * Includes all situations of public disorder, with potential to disrupt traffic.
     *
     * @property string[] $disturbanceActivityType
     */
    private $disturbanceActivityType = [
        
    ];

    /**
     * Type of major display or trade show which could disrupt traffic.
     *
     * @property string[] $publicEventType
     */
    private $publicEventType = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\MobilityType $mobilityOfActivities
     */
    private $mobilityOfActivities = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $activitiesExtension
     */
    private $activitiesExtension = null;

    /**
     * Adds as authorityOperationType
     *
     * Indicates the nature of the authority-initiated activity that will, is or has been taking place.
     *
     * @return self
     * @param string $authorityOperationType
     */
    public function addToAuthorityOperationType($authorityOperationType)
    {
        $this->authorityOperationType[] = $authorityOperationType;
        return $this;
    }

    /**
     * isset authorityOperationType
     *
     * Indicates the nature of the authority-initiated activity that will, is or has been taking place.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthorityOperationType($index)
    {
        return isset($this->authorityOperationType[$index]);
    }

    /**
     * unset authorityOperationType
     *
     * Indicates the nature of the authority-initiated activity that will, is or has been taking place.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthorityOperationType($index)
    {
        unset($this->authorityOperationType[$index]);
    }

    /**
     * Gets as authorityOperationType
     *
     * Indicates the nature of the authority-initiated activity that will, is or has been taking place.
     *
     * @return string[]
     */
    public function getAuthorityOperationType()
    {
        return $this->authorityOperationType;
    }

    /**
     * Sets a new authorityOperationType
     *
     * Indicates the nature of the authority-initiated activity that will, is or has been taking place.
     *
     * @param string $authorityOperationType
     * @return self
     */
    public function setAuthorityOperationType(array $authorityOperationType)
    {
        $this->authorityOperationType = $authorityOperationType;
        return $this;
    }

    /**
     * Adds as disturbanceActivityType
     *
     * Includes all situations of public disorder, with potential to disrupt traffic.
     *
     * @return self
     * @param string $disturbanceActivityType
     */
    public function addToDisturbanceActivityType($disturbanceActivityType)
    {
        $this->disturbanceActivityType[] = $disturbanceActivityType;
        return $this;
    }

    /**
     * isset disturbanceActivityType
     *
     * Includes all situations of public disorder, with potential to disrupt traffic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisturbanceActivityType($index)
    {
        return isset($this->disturbanceActivityType[$index]);
    }

    /**
     * unset disturbanceActivityType
     *
     * Includes all situations of public disorder, with potential to disrupt traffic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisturbanceActivityType($index)
    {
        unset($this->disturbanceActivityType[$index]);
    }

    /**
     * Gets as disturbanceActivityType
     *
     * Includes all situations of public disorder, with potential to disrupt traffic.
     *
     * @return string[]
     */
    public function getDisturbanceActivityType()
    {
        return $this->disturbanceActivityType;
    }

    /**
     * Sets a new disturbanceActivityType
     *
     * Includes all situations of public disorder, with potential to disrupt traffic.
     *
     * @param string $disturbanceActivityType
     * @return self
     */
    public function setDisturbanceActivityType(array $disturbanceActivityType)
    {
        $this->disturbanceActivityType = $disturbanceActivityType;
        return $this;
    }

    /**
     * Adds as publicEventType
     *
     * Type of major display or trade show which could disrupt traffic.
     *
     * @return self
     * @param string $publicEventType
     */
    public function addToPublicEventType($publicEventType)
    {
        $this->publicEventType[] = $publicEventType;
        return $this;
    }

    /**
     * isset publicEventType
     *
     * Type of major display or trade show which could disrupt traffic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPublicEventType($index)
    {
        return isset($this->publicEventType[$index]);
    }

    /**
     * unset publicEventType
     *
     * Type of major display or trade show which could disrupt traffic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPublicEventType($index)
    {
        unset($this->publicEventType[$index]);
    }

    /**
     * Gets as publicEventType
     *
     * Type of major display or trade show which could disrupt traffic.
     *
     * @return string[]
     */
    public function getPublicEventType()
    {
        return $this->publicEventType;
    }

    /**
     * Sets a new publicEventType
     *
     * Type of major display or trade show which could disrupt traffic.
     *
     * @param string $publicEventType
     * @return self
     */
    public function setPublicEventType(array $publicEventType)
    {
        $this->publicEventType = $publicEventType;
        return $this;
    }

    /**
     * Gets as mobilityOfActivities
     *
     * @return \Calcinai\Siri\Objects\Datex\MobilityType
     */
    public function getMobilityOfActivities()
    {
        return $this->mobilityOfActivities;
    }

    /**
     * Sets a new mobilityOfActivities
     *
     * @param \Calcinai\Siri\Objects\Datex\MobilityType $mobilityOfActivities
     * @return self
     */
    public function setMobilityOfActivities(\Calcinai\Siri\Objects\Datex\MobilityType $mobilityOfActivities)
    {
        $this->mobilityOfActivities = $mobilityOfActivities;
        return $this;
    }

    /**
     * Gets as activitiesExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getActivitiesExtension()
    {
        return $this->activitiesExtension;
    }

    /**
     * Sets a new activitiesExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $activitiesExtension
     * @return self
     */
    public function setActivitiesExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $activitiesExtension)
    {
        $this->activitiesExtension = $activitiesExtension;
        return $this;
    }


}

