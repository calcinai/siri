<?php

namespace Calcinai\Siri;

/**
 * Class representing AbstractDistributorItemStructureType
 *
 * Type for an interchange Activity.
 * XSD Type: AbstractDistributorItemStructure
 */
class AbstractDistributorItemStructureType extends AbstractItemStructureType
{

    /**
     * Identifies the Interchange between two journeys for which data is being returned.
     *
     * @property string $interchangeRef
     */
    private $interchangeRef = null;

    /**
     * Identifier of the Connection Point Link or Connection Area for which data is to be returned and at which interchange takes place. A reference associated with known feeder arrival and distributor departure stop points.
     *
     * @property string $connectionLinkRef
     */
    private $connectionLinkRef = null;

    /**
     * Reference to a stop point within connection from which distributor leaves.Reference to a stop point.
     *
     * @property string $stopPointRef
     */
    private $stopPointRef = null;

    /**
     * Order of visit to a stop within journey pattern of distributor vehicle journey
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
     * Information about the connecting Distributor (fetcher) Journey.
     *
     * @property \Calcinai\Siri\InterchangeJourneyStructureType $distributorJourney
     */
    private $distributorJourney = null;

    /**
     * Identifies the feeder Vehicle journey or journeys for which the Distributor (fetcher) will wait .
     *
     * @property \Calcinai\Siri\FramedVehicleJourneyRefStructureType[] $feederVehicleJourneyRef
     */
    private $feederVehicleJourneyRef = [
        
    ];

    /**
     * Gets as interchangeRef
     *
     * Identifies the Interchange between two journeys for which data is being returned.
     *
     * @return string
     */
    public function getInterchangeRef()
    {
        return $this->interchangeRef;
    }

    /**
     * Sets a new interchangeRef
     *
     * Identifies the Interchange between two journeys for which data is being returned.
     *
     * @param string $interchangeRef
     * @return self
     */
    public function setInterchangeRef($interchangeRef)
    {
        $this->interchangeRef = $interchangeRef;
        return $this;
    }

    /**
     * Gets as connectionLinkRef
     *
     * Identifier of the Connection Point Link or Connection Area for which data is to be returned and at which interchange takes place. A reference associated with known feeder arrival and distributor departure stop points.
     *
     * @return string
     */
    public function getConnectionLinkRef()
    {
        return $this->connectionLinkRef;
    }

    /**
     * Sets a new connectionLinkRef
     *
     * Identifier of the Connection Point Link or Connection Area for which data is to be returned and at which interchange takes place. A reference associated with known feeder arrival and distributor departure stop points.
     *
     * @param string $connectionLinkRef
     * @return self
     */
    public function setConnectionLinkRef($connectionLinkRef)
    {
        $this->connectionLinkRef = $connectionLinkRef;
        return $this;
    }

    /**
     * Gets as stopPointRef
     *
     * Reference to a stop point within connection from which distributor leaves.Reference to a stop point.
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
     * Reference to a stop point within connection from which distributor leaves.Reference to a stop point.
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
     * Gets as distributorVisitNumber
     *
     * Order of visit to a stop within journey pattern of distributor vehicle journey
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
     * Order of visit to a stop within journey pattern of distributor vehicle journey
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
     * Gets as distributorJourney
     *
     * Information about the connecting Distributor (fetcher) Journey.
     *
     * @return \Calcinai\Siri\InterchangeJourneyStructureType
     */
    public function getDistributorJourney()
    {
        return $this->distributorJourney;
    }

    /**
     * Sets a new distributorJourney
     *
     * Information about the connecting Distributor (fetcher) Journey.
     *
     * @param \Calcinai\Siri\InterchangeJourneyStructureType $distributorJourney
     * @return self
     */
    public function setDistributorJourney(\Calcinai\Siri\InterchangeJourneyStructureType $distributorJourney)
    {
        $this->distributorJourney = $distributorJourney;
        return $this;
    }

    /**
     * Adds as feederVehicleJourneyRef
     *
     * Identifies the feeder Vehicle journey or journeys for which the Distributor (fetcher) will wait .
     *
     * @return self
     * @param \Calcinai\Siri\FramedVehicleJourneyRefStructureType $feederVehicleJourneyRef
     */
    public function addToFeederVehicleJourneyRef(\Calcinai\Siri\FramedVehicleJourneyRefStructureType $feederVehicleJourneyRef)
    {
        $this->feederVehicleJourneyRef[] = $feederVehicleJourneyRef;
        return $this;
    }

    /**
     * isset feederVehicleJourneyRef
     *
     * Identifies the feeder Vehicle journey or journeys for which the Distributor (fetcher) will wait .
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeederVehicleJourneyRef($index)
    {
        return isset($this->feederVehicleJourneyRef[$index]);
    }

    /**
     * unset feederVehicleJourneyRef
     *
     * Identifies the feeder Vehicle journey or journeys for which the Distributor (fetcher) will wait .
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeederVehicleJourneyRef($index)
    {
        unset($this->feederVehicleJourneyRef[$index]);
    }

    /**
     * Gets as feederVehicleJourneyRef
     *
     * Identifies the feeder Vehicle journey or journeys for which the Distributor (fetcher) will wait .
     *
     * @return \Calcinai\Siri\FramedVehicleJourneyRefStructureType[]
     */
    public function getFeederVehicleJourneyRef()
    {
        return $this->feederVehicleJourneyRef;
    }

    /**
     * Sets a new feederVehicleJourneyRef
     *
     * Identifies the feeder Vehicle journey or journeys for which the Distributor (fetcher) will wait .
     *
     * @param \Calcinai\Siri\FramedVehicleJourneyRefStructureType[] $feederVehicleJourneyRef
     * @return self
     */
    public function setFeederVehicleJourneyRef(array $feederVehicleJourneyRef)
    {
        $this->feederVehicleJourneyRef = $feederVehicleJourneyRef;
        return $this;
    }


}

