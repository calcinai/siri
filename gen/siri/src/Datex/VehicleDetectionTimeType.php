<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing VehicleDetectionTimeType
 *
 * Sets of measured times relating to an individual vehicle derived from a detector at the specified measurement point.
 * XSD Type: VehicleDetectionTime
 */
class VehicleDetectionTimeType
{

    /**
     * The time of the arrival of an individual vehicle in a detection zone.
     *
     * @property \DateTime $arrivalTime
     */
    private $arrivalTime = null;

    /**
     * The time when an individual vehicle leaves a detection zone.
     *
     * @property \DateTime $exitTime
     */
    private $exitTime = null;

    /**
     * The time elapsed between an individual vehicle entering a detection zone and exiting the same detection zone as detected by entry and exit sensors.
     *
     * @property \DateTime $passageTime
     */
    private $passageTime = null;

    /**
     * The time during which a vehicle activates a presence sensor.
     *
     * @property \DateTime $presenceTime
     */
    private $presenceTime = null;

    /**
     * The time interval between the arrival of this vehicle's front at a point on the roadway, and that of the departure of the rear of the preceding one.
     *
     * @property float $timeGap
     */
    private $timeGap = null;

    /**
     * The measured time interval between this vehicle's arrival at (or departure from) a point on the roadway, and that of the preceding one.
     *
     * @property float $timeHeadway
     */
    private $timeHeadway = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $vehicleDetectionTimeExtension
     */
    private $vehicleDetectionTimeExtension = null;

    /**
     * Gets as arrivalTime
     *
     * The time of the arrival of an individual vehicle in a detection zone.
     *
     * @return \DateTime
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    /**
     * Sets a new arrivalTime
     *
     * The time of the arrival of an individual vehicle in a detection zone.
     *
     * @param \DateTime $arrivalTime
     * @return self
     */
    public function setArrivalTime(\DateTime $arrivalTime)
    {
        $this->arrivalTime = $arrivalTime;
        return $this;
    }

    /**
     * Gets as exitTime
     *
     * The time when an individual vehicle leaves a detection zone.
     *
     * @return \DateTime
     */
    public function getExitTime()
    {
        return $this->exitTime;
    }

    /**
     * Sets a new exitTime
     *
     * The time when an individual vehicle leaves a detection zone.
     *
     * @param \DateTime $exitTime
     * @return self
     */
    public function setExitTime(\DateTime $exitTime)
    {
        $this->exitTime = $exitTime;
        return $this;
    }

    /**
     * Gets as passageTime
     *
     * The time elapsed between an individual vehicle entering a detection zone and exiting the same detection zone as detected by entry and exit sensors.
     *
     * @return \DateTime
     */
    public function getPassageTime()
    {
        return $this->passageTime;
    }

    /**
     * Sets a new passageTime
     *
     * The time elapsed between an individual vehicle entering a detection zone and exiting the same detection zone as detected by entry and exit sensors.
     *
     * @param \DateTime $passageTime
     * @return self
     */
    public function setPassageTime(\DateTime $passageTime)
    {
        $this->passageTime = $passageTime;
        return $this;
    }

    /**
     * Gets as presenceTime
     *
     * The time during which a vehicle activates a presence sensor.
     *
     * @return \DateTime
     */
    public function getPresenceTime()
    {
        return $this->presenceTime;
    }

    /**
     * Sets a new presenceTime
     *
     * The time during which a vehicle activates a presence sensor.
     *
     * @param \DateTime $presenceTime
     * @return self
     */
    public function setPresenceTime(\DateTime $presenceTime)
    {
        $this->presenceTime = $presenceTime;
        return $this;
    }

    /**
     * Gets as timeGap
     *
     * The time interval between the arrival of this vehicle's front at a point on the roadway, and that of the departure of the rear of the preceding one.
     *
     * @return float
     */
    public function getTimeGap()
    {
        return $this->timeGap;
    }

    /**
     * Sets a new timeGap
     *
     * The time interval between the arrival of this vehicle's front at a point on the roadway, and that of the departure of the rear of the preceding one.
     *
     * @param float $timeGap
     * @return self
     */
    public function setTimeGap($timeGap)
    {
        $this->timeGap = $timeGap;
        return $this;
    }

    /**
     * Gets as timeHeadway
     *
     * The measured time interval between this vehicle's arrival at (or departure from) a point on the roadway, and that of the preceding one.
     *
     * @return float
     */
    public function getTimeHeadway()
    {
        return $this->timeHeadway;
    }

    /**
     * Sets a new timeHeadway
     *
     * The measured time interval between this vehicle's arrival at (or departure from) a point on the roadway, and that of the preceding one.
     *
     * @param float $timeHeadway
     * @return self
     */
    public function setTimeHeadway($timeHeadway)
    {
        $this->timeHeadway = $timeHeadway;
        return $this;
    }

    /**
     * Gets as vehicleDetectionTimeExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getVehicleDetectionTimeExtension()
    {
        return $this->vehicleDetectionTimeExtension;
    }

    /**
     * Sets a new vehicleDetectionTimeExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $vehicleDetectionTimeExtension
     * @return self
     */
    public function setVehicleDetectionTimeExtension(\Calcinai\Siri\Datex\ExtensionType $vehicleDetectionTimeExtension)
    {
        $this->vehicleDetectionTimeExtension = $vehicleDetectionTimeExtension;
        return $this;
    }


}

