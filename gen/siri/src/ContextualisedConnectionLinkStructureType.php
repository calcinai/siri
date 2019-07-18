<?php

namespace Calcinai\Siri;

/**
 * Class representing ContextualisedConnectionLinkStructureType
 *
 * Connection between two stops within a connection area. Used within teh context of one or other end
 * XSD Type: ContextualisedConnectionLinkStructure
 */
class ContextualisedConnectionLinkStructureType
{

    /**
     * Identifier of connection Link
     *
     * @property string $connectionLinkCode
     */
    private $connectionLinkCode = null;

    /**
     * @property string $stopPointRef
     */
    private $stopPointRef = null;

    /**
     * @property \Calcinai\Siri\StopPointName $stopPointName
     */
    private $stopPointName = null;

    /**
     * Default time (Duration) needeed to traverse interchange from feeder to distributor
     *
     * @property \DateInterval $defaultDuration
     */
    private $defaultDuration = null;

    /**
     * Time needeed by a traveller whis is familiar with interchange to traverse it. If absent, use DefaultDuration.
     *
     * @property \DateInterval $frequentTravellerDuration
     */
    private $frequentTravellerDuration = null;

    /**
     * Time needeed by a traveller whis is not familiar with interchange to traverse it. If absent, use DefaultDuration and a standard weighting.
     *
     * @property \DateInterval $occasionalTravellerDuration
     */
    private $occasionalTravellerDuration = null;

    /**
     * Time needeed by a traveller wos is mobility impaired to traverse interchange. If absent, use DefaultDuration and a standard impaired travel speed.
     *
     * @property \DateInterval $impairedAccessDuration
     */
    private $impairedAccessDuration = null;

    /**
     * Gets as connectionLinkCode
     *
     * Identifier of connection Link
     *
     * @return string
     */
    public function getConnectionLinkCode()
    {
        return $this->connectionLinkCode;
    }

    /**
     * Sets a new connectionLinkCode
     *
     * Identifier of connection Link
     *
     * @param string $connectionLinkCode
     * @return self
     */
    public function setConnectionLinkCode($connectionLinkCode)
    {
        $this->connectionLinkCode = $connectionLinkCode;
        return $this;
    }

    /**
     * Gets as stopPointRef
     *
     * @return string
     */
    public function getStopPointRef()
    {
        return $this->stopPointRef;
    }

    /**
     * Sets a new stopPointRef
     *
     * @param string $stopPointRef
     * @return self
     */
    public function setStopPointRef($stopPointRef)
    {
        $this->stopPointRef = $stopPointRef;
        return $this;
    }

    /**
     * Gets as stopPointName
     *
     * @return \Calcinai\Siri\StopPointName
     */
    public function getStopPointName()
    {
        return $this->stopPointName;
    }

    /**
     * Sets a new stopPointName
     *
     * @param \Calcinai\Siri\StopPointName $stopPointName
     * @return self
     */
    public function setStopPointName(\Calcinai\Siri\StopPointName $stopPointName)
    {
        $this->stopPointName = $stopPointName;
        return $this;
    }

    /**
     * Gets as defaultDuration
     *
     * Default time (Duration) needeed to traverse interchange from feeder to distributor
     *
     * @return \DateInterval
     */
    public function getDefaultDuration()
    {
        return $this->defaultDuration;
    }

    /**
     * Sets a new defaultDuration
     *
     * Default time (Duration) needeed to traverse interchange from feeder to distributor
     *
     * @param \DateInterval $defaultDuration
     * @return self
     */
    public function setDefaultDuration(\DateInterval $defaultDuration)
    {
        $this->defaultDuration = $defaultDuration;
        return $this;
    }

    /**
     * Gets as frequentTravellerDuration
     *
     * Time needeed by a traveller whis is familiar with interchange to traverse it. If absent, use DefaultDuration.
     *
     * @return \DateInterval
     */
    public function getFrequentTravellerDuration()
    {
        return $this->frequentTravellerDuration;
    }

    /**
     * Sets a new frequentTravellerDuration
     *
     * Time needeed by a traveller whis is familiar with interchange to traverse it. If absent, use DefaultDuration.
     *
     * @param \DateInterval $frequentTravellerDuration
     * @return self
     */
    public function setFrequentTravellerDuration(\DateInterval $frequentTravellerDuration)
    {
        $this->frequentTravellerDuration = $frequentTravellerDuration;
        return $this;
    }

    /**
     * Gets as occasionalTravellerDuration
     *
     * Time needeed by a traveller whis is not familiar with interchange to traverse it. If absent, use DefaultDuration and a standard weighting.
     *
     * @return \DateInterval
     */
    public function getOccasionalTravellerDuration()
    {
        return $this->occasionalTravellerDuration;
    }

    /**
     * Sets a new occasionalTravellerDuration
     *
     * Time needeed by a traveller whis is not familiar with interchange to traverse it. If absent, use DefaultDuration and a standard weighting.
     *
     * @param \DateInterval $occasionalTravellerDuration
     * @return self
     */
    public function setOccasionalTravellerDuration(\DateInterval $occasionalTravellerDuration)
    {
        $this->occasionalTravellerDuration = $occasionalTravellerDuration;
        return $this;
    }

    /**
     * Gets as impairedAccessDuration
     *
     * Time needeed by a traveller wos is mobility impaired to traverse interchange. If absent, use DefaultDuration and a standard impaired travel speed.
     *
     * @return \DateInterval
     */
    public function getImpairedAccessDuration()
    {
        return $this->impairedAccessDuration;
    }

    /**
     * Sets a new impairedAccessDuration
     *
     * Time needeed by a traveller wos is mobility impaired to traverse interchange. If absent, use DefaultDuration and a standard impaired travel speed.
     *
     * @param \DateInterval $impairedAccessDuration
     * @return self
     */
    public function setImpairedAccessDuration(\DateInterval $impairedAccessDuration)
    {
        $this->impairedAccessDuration = $impairedAccessDuration;
        return $this;
    }


}

