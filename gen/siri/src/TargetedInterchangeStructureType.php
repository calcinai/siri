<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing TargetedInterchangeStructureType
 *
 * Planned Connection between two vehicle journeys.
 * XSD Type: TargetedInterchangeStructure
 */
class TargetedInterchangeStructureType
{

    /**
     * Identifier of Journey Interchange.
     *
     * @property string $interchangeCode
     */
    private $interchangeCode = null;

    /**
     * Identifies the (dated) distributor vehicle journey.
     *
     * @property string $distributorVehicleJourneyRef
     */
    private $distributorVehicleJourneyRef = null;

    /**
     * Reference to a physical connection link over which the interchange takes place.
     *
     * @property string $distributorConnectionLinkRef
     */
    private $distributorConnectionLinkRef = null;

    /**
     * Link to Interchange stop from which the distributor journey departs. If omitted: the distributor journey stop is the same as the feeder journey stop, i.e. that of theh dated call.
     *
     * @property \Calcinai\Siri\Objects\ContextualisedConnectionLinkStructureType $distributorConnectionLink
     */
    private $distributorConnectionLink = null;

    /**
     * Sequence of visit to Distributor stop within Distributor Journey Pattern.
     *
     * @property int $distributorVisitNumber
     */
    private $distributorVisitNumber = null;

    /**
     * For implementations for which Order is not used for VisitNumber, (i.e. if VisitNumberIsOrder is false) then Order can be used to associate the Order as well if useful for translation.
     *
     * @property int $distributorOrder
     */
    private $distributorOrder = null;

    /**
     * Whether the passenger can remain in vehicle (i.e. block linking). Default is false: the passenger must change vehicles for this connection.
     *
     * @property bool $staySeated
     */
    private $staySeated = null;

    /**
     * Whether the interchange is guranteed. Default is false; interchange is not guaranteed.
     *
     * @property bool $guaranteed
     */
    private $guaranteed = null;

    /**
     * Whether the interchange is advertised as a connection. Default is false.
     *
     * @property bool $advertised
     */
    private $advertised = null;

    /**
     * Maximum Additional that Distributor will wait for Feeder
     *
     * @property \DateInterval $maximumWaitTime
     */
    private $maximumWaitTime = null;

    /**
     * Gets as interchangeCode
     *
     * Identifier of Journey Interchange.
     *
     * @return string
     */
    public function getInterchangeCode()
    {
        return $this->interchangeCode;
    }

    /**
     * Sets a new interchangeCode
     *
     * Identifier of Journey Interchange.
     *
     * @param string $interchangeCode
     * @return self
     */
    public function setInterchangeCode($interchangeCode)
    {
        $this->interchangeCode = $interchangeCode;
        return $this;
    }

    /**
     * Gets as distributorVehicleJourneyRef
     *
     * Identifies the (dated) distributor vehicle journey.
     *
     * @return string
     */
    public function getDistributorVehicleJourneyRef()
    {
        return $this->distributorVehicleJourneyRef;
    }

    /**
     * Sets a new distributorVehicleJourneyRef
     *
     * Identifies the (dated) distributor vehicle journey.
     *
     * @param string $distributorVehicleJourneyRef
     * @return self
     */
    public function setDistributorVehicleJourneyRef($distributorVehicleJourneyRef)
    {
        $this->distributorVehicleJourneyRef = $distributorVehicleJourneyRef;
        return $this;
    }

    /**
     * Gets as distributorConnectionLinkRef
     *
     * Reference to a physical connection link over which the interchange takes place.
     *
     * @return string
     */
    public function getDistributorConnectionLinkRef()
    {
        return $this->distributorConnectionLinkRef;
    }

    /**
     * Sets a new distributorConnectionLinkRef
     *
     * Reference to a physical connection link over which the interchange takes place.
     *
     * @param string $distributorConnectionLinkRef
     * @return self
     */
    public function setDistributorConnectionLinkRef($distributorConnectionLinkRef)
    {
        $this->distributorConnectionLinkRef = $distributorConnectionLinkRef;
        return $this;
    }

    /**
     * Gets as distributorConnectionLink
     *
     * Link to Interchange stop from which the distributor journey departs. If omitted: the distributor journey stop is the same as the feeder journey stop, i.e. that of theh dated call.
     *
     * @return \Calcinai\Siri\Objects\ContextualisedConnectionLinkStructureType
     */
    public function getDistributorConnectionLink()
    {
        return $this->distributorConnectionLink;
    }

    /**
     * Sets a new distributorConnectionLink
     *
     * Link to Interchange stop from which the distributor journey departs. If omitted: the distributor journey stop is the same as the feeder journey stop, i.e. that of theh dated call.
     *
     * @param \Calcinai\Siri\Objects\ContextualisedConnectionLinkStructureType $distributorConnectionLink
     * @return self
     */
    public function setDistributorConnectionLink(\Calcinai\Siri\Objects\ContextualisedConnectionLinkStructureType $distributorConnectionLink)
    {
        $this->distributorConnectionLink = $distributorConnectionLink;
        return $this;
    }

    /**
     * Gets as distributorVisitNumber
     *
     * Sequence of visit to Distributor stop within Distributor Journey Pattern.
     *
     * @return int
     */
    public function getDistributorVisitNumber()
    {
        return $this->distributorVisitNumber;
    }

    /**
     * Sets a new distributorVisitNumber
     *
     * Sequence of visit to Distributor stop within Distributor Journey Pattern.
     *
     * @param int $distributorVisitNumber
     * @return self
     */
    public function setDistributorVisitNumber($distributorVisitNumber)
    {
        $this->distributorVisitNumber = $distributorVisitNumber;
        return $this;
    }

    /**
     * Gets as distributorOrder
     *
     * For implementations for which Order is not used for VisitNumber, (i.e. if VisitNumberIsOrder is false) then Order can be used to associate the Order as well if useful for translation.
     *
     * @return int
     */
    public function getDistributorOrder()
    {
        return $this->distributorOrder;
    }

    /**
     * Sets a new distributorOrder
     *
     * For implementations for which Order is not used for VisitNumber, (i.e. if VisitNumberIsOrder is false) then Order can be used to associate the Order as well if useful for translation.
     *
     * @param int $distributorOrder
     * @return self
     */
    public function setDistributorOrder($distributorOrder)
    {
        $this->distributorOrder = $distributorOrder;
        return $this;
    }

    /**
     * Gets as staySeated
     *
     * Whether the passenger can remain in vehicle (i.e. block linking). Default is false: the passenger must change vehicles for this connection.
     *
     * @return bool
     */
    public function getStaySeated()
    {
        return $this->staySeated;
    }

    /**
     * Sets a new staySeated
     *
     * Whether the passenger can remain in vehicle (i.e. block linking). Default is false: the passenger must change vehicles for this connection.
     *
     * @param bool $staySeated
     * @return self
     */
    public function setStaySeated($staySeated)
    {
        $this->staySeated = $staySeated;
        return $this;
    }

    /**
     * Gets as guaranteed
     *
     * Whether the interchange is guranteed. Default is false; interchange is not guaranteed.
     *
     * @return bool
     */
    public function getGuaranteed()
    {
        return $this->guaranteed;
    }

    /**
     * Sets a new guaranteed
     *
     * Whether the interchange is guranteed. Default is false; interchange is not guaranteed.
     *
     * @param bool $guaranteed
     * @return self
     */
    public function setGuaranteed($guaranteed)
    {
        $this->guaranteed = $guaranteed;
        return $this;
    }

    /**
     * Gets as advertised
     *
     * Whether the interchange is advertised as a connection. Default is false.
     *
     * @return bool
     */
    public function getAdvertised()
    {
        return $this->advertised;
    }

    /**
     * Sets a new advertised
     *
     * Whether the interchange is advertised as a connection. Default is false.
     *
     * @param bool $advertised
     * @return self
     */
    public function setAdvertised($advertised)
    {
        $this->advertised = $advertised;
        return $this;
    }

    /**
     * Gets as maximumWaitTime
     *
     * Maximum Additional that Distributor will wait for Feeder
     *
     * @return \DateInterval
     */
    public function getMaximumWaitTime()
    {
        return $this->maximumWaitTime;
    }

    /**
     * Sets a new maximumWaitTime
     *
     * Maximum Additional that Distributor will wait for Feeder
     *
     * @param \DateInterval $maximumWaitTime
     * @return self
     */
    public function setMaximumWaitTime(\DateInterval $maximumWaitTime)
    {
        $this->maximumWaitTime = $maximumWaitTime;
        return $this;
    }


}

