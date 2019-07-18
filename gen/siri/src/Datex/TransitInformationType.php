<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing TransitInformationType
 *
 * The availability of transit services and information relating to their departures. This is limited to those transit services which are of direct relevance to road users, e.g. connecting rail or ferry services.
 * XSD Type: TransitInformation
 */
class TransitInformationType extends NonRoadEventInformationType
{

    /**
     * Indicates the stated termination point of the transit journey.
     *
     * @property \Calcinai\Siri\Datex\TransitInformationType\JourneyDestinationAType\ValueAType[] $journeyDestination
     */
    private $journeyDestination = null;

    /**
     * Indicates the stated starting point of the transit journey.
     *
     * @property \Calcinai\Siri\Datex\TransitInformationType\JourneyOriginAType\ValueAType[] $journeyOrigin
     */
    private $journeyOrigin = null;

    /**
     * Indicates a transit service journey number.
     *
     * @property string $journeyReference
     */
    private $journeyReference = null;

    /**
     * Information about transit services.
     *
     * @property string $transitServiceInformation
     */
    private $transitServiceInformation = null;

    /**
     * The type of transit service to which the information relates.
     *
     * @property string $transitServiceType
     */
    private $transitServiceType = null;

    /**
     * Indicates the timetabled departure time of a transit service for a specified location.
     *
     * @property \DateTime $scheduledDepartureTime
     */
    private $scheduledDepartureTime = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $transitInformationExtension
     */
    private $transitInformationExtension = null;

    /**
     * Adds as value
     *
     * Indicates the stated termination point of the transit journey.
     *
     * @return self
     * @param \Calcinai\Siri\Datex\TransitInformationType\JourneyDestinationAType\ValueAType $value
     */
    public function addToJourneyDestination(\Calcinai\Siri\Datex\TransitInformationType\JourneyDestinationAType\ValueAType $value)
    {
        $this->journeyDestination[] = $value;
        return $this;
    }

    /**
     * isset journeyDestination
     *
     * Indicates the stated termination point of the transit journey.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJourneyDestination($index)
    {
        return isset($this->journeyDestination[$index]);
    }

    /**
     * unset journeyDestination
     *
     * Indicates the stated termination point of the transit journey.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJourneyDestination($index)
    {
        unset($this->journeyDestination[$index]);
    }

    /**
     * Gets as journeyDestination
     *
     * Indicates the stated termination point of the transit journey.
     *
     * @return \Calcinai\Siri\Datex\TransitInformationType\JourneyDestinationAType\ValueAType[]
     */
    public function getJourneyDestination()
    {
        return $this->journeyDestination;
    }

    /**
     * Sets a new journeyDestination
     *
     * Indicates the stated termination point of the transit journey.
     *
     * @param \Calcinai\Siri\Datex\TransitInformationType\JourneyDestinationAType\ValueAType[] $journeyDestination
     * @return self
     */
    public function setJourneyDestination(array $journeyDestination)
    {
        $this->journeyDestination = $journeyDestination;
        return $this;
    }

    /**
     * Adds as value
     *
     * Indicates the stated starting point of the transit journey.
     *
     * @return self
     * @param \Calcinai\Siri\Datex\TransitInformationType\JourneyOriginAType\ValueAType $value
     */
    public function addToJourneyOrigin(\Calcinai\Siri\Datex\TransitInformationType\JourneyOriginAType\ValueAType $value)
    {
        $this->journeyOrigin[] = $value;
        return $this;
    }

    /**
     * isset journeyOrigin
     *
     * Indicates the stated starting point of the transit journey.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJourneyOrigin($index)
    {
        return isset($this->journeyOrigin[$index]);
    }

    /**
     * unset journeyOrigin
     *
     * Indicates the stated starting point of the transit journey.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJourneyOrigin($index)
    {
        unset($this->journeyOrigin[$index]);
    }

    /**
     * Gets as journeyOrigin
     *
     * Indicates the stated starting point of the transit journey.
     *
     * @return \Calcinai\Siri\Datex\TransitInformationType\JourneyOriginAType\ValueAType[]
     */
    public function getJourneyOrigin()
    {
        return $this->journeyOrigin;
    }

    /**
     * Sets a new journeyOrigin
     *
     * Indicates the stated starting point of the transit journey.
     *
     * @param \Calcinai\Siri\Datex\TransitInformationType\JourneyOriginAType\ValueAType[] $journeyOrigin
     * @return self
     */
    public function setJourneyOrigin(array $journeyOrigin)
    {
        $this->journeyOrigin = $journeyOrigin;
        return $this;
    }

    /**
     * Gets as journeyReference
     *
     * Indicates a transit service journey number.
     *
     * @return string
     */
    public function getJourneyReference()
    {
        return $this->journeyReference;
    }

    /**
     * Sets a new journeyReference
     *
     * Indicates a transit service journey number.
     *
     * @param string $journeyReference
     * @return self
     */
    public function setJourneyReference($journeyReference)
    {
        $this->journeyReference = $journeyReference;
        return $this;
    }

    /**
     * Gets as transitServiceInformation
     *
     * Information about transit services.
     *
     * @return string
     */
    public function getTransitServiceInformation()
    {
        return $this->transitServiceInformation;
    }

    /**
     * Sets a new transitServiceInformation
     *
     * Information about transit services.
     *
     * @param string $transitServiceInformation
     * @return self
     */
    public function setTransitServiceInformation($transitServiceInformation)
    {
        $this->transitServiceInformation = $transitServiceInformation;
        return $this;
    }

    /**
     * Gets as transitServiceType
     *
     * The type of transit service to which the information relates.
     *
     * @return string
     */
    public function getTransitServiceType()
    {
        return $this->transitServiceType;
    }

    /**
     * Sets a new transitServiceType
     *
     * The type of transit service to which the information relates.
     *
     * @param string $transitServiceType
     * @return self
     */
    public function setTransitServiceType($transitServiceType)
    {
        $this->transitServiceType = $transitServiceType;
        return $this;
    }

    /**
     * Gets as scheduledDepartureTime
     *
     * Indicates the timetabled departure time of a transit service for a specified location.
     *
     * @return \DateTime
     */
    public function getScheduledDepartureTime()
    {
        return $this->scheduledDepartureTime;
    }

    /**
     * Sets a new scheduledDepartureTime
     *
     * Indicates the timetabled departure time of a transit service for a specified location.
     *
     * @param \DateTime $scheduledDepartureTime
     * @return self
     */
    public function setScheduledDepartureTime(\DateTime $scheduledDepartureTime)
    {
        $this->scheduledDepartureTime = $scheduledDepartureTime;
        return $this;
    }

    /**
     * Gets as transitInformationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getTransitInformationExtension()
    {
        return $this->transitInformationExtension;
    }

    /**
     * Sets a new transitInformationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $transitInformationExtension
     * @return self
     */
    public function setTransitInformationExtension(\Calcinai\Siri\Datex\ExtensionType $transitInformationExtension)
    {
        $this->transitInformationExtension = $transitInformationExtension;
        return $this;
    }


}

