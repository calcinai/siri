<?php

namespace Calcinai\Siri\FacilityStructureType;

/**
 * Class representing LimitationsAType
 */
class LimitationsAType
{

    /**
     * @property string $wheelchairAccess
     */
    private $wheelchairAccess = null;

    /**
     * @property string $stepFreeAccess
     */
    private $stepFreeAccess = null;

    /**
     * @property string $escalatorFreeAccess
     */
    private $escalatorFreeAccess = null;

    /**
     * @property string $liftFreeAccess
     */
    private $liftFreeAccess = null;

    /**
     * Whether a Place has Audible signals for the viusally impaired.
     *
     * @property string $audibleSignalsAvailable
     */
    private $audibleSignalsAvailable = null;

    /**
     * Whether a Place hasVisual signals for the hearing impaired.
     *
     * @property string $visualSignsAvailable
     */
    private $visualSignsAvailable = null;

    /**
     * Gets as wheelchairAccess
     *
     * @return string
     */
    public function getWheelchairAccess()
    {
        return $this->wheelchairAccess;
    }

    /**
     * Sets a new wheelchairAccess
     *
     * @param string $wheelchairAccess
     * @return self
     */
    public function setWheelchairAccess($wheelchairAccess)
    {
        $this->wheelchairAccess = $wheelchairAccess;
        return $this;
    }

    /**
     * Gets as stepFreeAccess
     *
     * @return string
     */
    public function getStepFreeAccess()
    {
        return $this->stepFreeAccess;
    }

    /**
     * Sets a new stepFreeAccess
     *
     * @param string $stepFreeAccess
     * @return self
     */
    public function setStepFreeAccess($stepFreeAccess)
    {
        $this->stepFreeAccess = $stepFreeAccess;
        return $this;
    }

    /**
     * Gets as escalatorFreeAccess
     *
     * @return string
     */
    public function getEscalatorFreeAccess()
    {
        return $this->escalatorFreeAccess;
    }

    /**
     * Sets a new escalatorFreeAccess
     *
     * @param string $escalatorFreeAccess
     * @return self
     */
    public function setEscalatorFreeAccess($escalatorFreeAccess)
    {
        $this->escalatorFreeAccess = $escalatorFreeAccess;
        return $this;
    }

    /**
     * Gets as liftFreeAccess
     *
     * @return string
     */
    public function getLiftFreeAccess()
    {
        return $this->liftFreeAccess;
    }

    /**
     * Sets a new liftFreeAccess
     *
     * @param string $liftFreeAccess
     * @return self
     */
    public function setLiftFreeAccess($liftFreeAccess)
    {
        $this->liftFreeAccess = $liftFreeAccess;
        return $this;
    }

    /**
     * Gets as audibleSignalsAvailable
     *
     * Whether a Place has Audible signals for the viusally impaired.
     *
     * @return string
     */
    public function getAudibleSignalsAvailable()
    {
        return $this->audibleSignalsAvailable;
    }

    /**
     * Sets a new audibleSignalsAvailable
     *
     * Whether a Place has Audible signals for the viusally impaired.
     *
     * @param string $audibleSignalsAvailable
     * @return self
     */
    public function setAudibleSignalsAvailable($audibleSignalsAvailable)
    {
        $this->audibleSignalsAvailable = $audibleSignalsAvailable;
        return $this;
    }

    /**
     * Gets as visualSignsAvailable
     *
     * Whether a Place hasVisual signals for the hearing impaired.
     *
     * @return string
     */
    public function getVisualSignsAvailable()
    {
        return $this->visualSignsAvailable;
    }

    /**
     * Sets a new visualSignsAvailable
     *
     * Whether a Place hasVisual signals for the hearing impaired.
     *
     * @param string $visualSignsAvailable
     * @return self
     */
    public function setVisualSignsAvailable($visualSignsAvailable)
    {
        $this->visualSignsAvailable = $visualSignsAvailable;
        return $this;
    }


}

