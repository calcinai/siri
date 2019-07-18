<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing FramedVehicleJourneyRefStructureType
 *
 * Type for Identifer of a MonitoredVehicleJourney within data Horizon of a service
 * XSD Type: FramedVehicleJourneyRefStructure
 */
class FramedVehicleJourneyRefStructureType
{

    /**
     * Unique identifier of data frame within particpant service. Used to ensure that the DatedVehicleJourneyRef is Unique with the data horizon of the service. Often the OperationalDayType is used for this purpose
     *
     * @property string $dataFrameRef
     */
    private $dataFrameRef = null;

    /**
     * A reference to the dated vehicle journey that the vehicle is making.
     *
     * @property string $datedVehicleJourneyRef
     */
    private $datedVehicleJourneyRef = null;

    /**
     * Gets as dataFrameRef
     *
     * Unique identifier of data frame within particpant service. Used to ensure that the DatedVehicleJourneyRef is Unique with the data horizon of the service. Often the OperationalDayType is used for this purpose
     *
     * @return string
     */
    public function getDataFrameRef()
    {
        return $this->dataFrameRef;
    }

    /**
     * Sets a new dataFrameRef
     *
     * Unique identifier of data frame within particpant service. Used to ensure that the DatedVehicleJourneyRef is Unique with the data horizon of the service. Often the OperationalDayType is used for this purpose
     *
     * @param string $dataFrameRef
     * @return self
     */
    public function setDataFrameRef($dataFrameRef)
    {
        $this->dataFrameRef = $dataFrameRef;
        return $this;
    }

    /**
     * Gets as datedVehicleJourneyRef
     *
     * A reference to the dated vehicle journey that the vehicle is making.
     *
     * @return string
     */
    public function getDatedVehicleJourneyRef()
    {
        return $this->datedVehicleJourneyRef;
    }

    /**
     * Sets a new datedVehicleJourneyRef
     *
     * A reference to the dated vehicle journey that the vehicle is making.
     *
     * @param string $datedVehicleJourneyRef
     * @return self
     */
    public function setDatedVehicleJourneyRef($datedVehicleJourneyRef)
    {
        $this->datedVehicleJourneyRef = $datedVehicleJourneyRef;
        return $this;
    }


}

