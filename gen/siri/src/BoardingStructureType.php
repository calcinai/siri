<?php

namespace Calcinai\Siri;

/**
 * Class representing BoardingStructureType
 *
 * Type for boarding restrictions
 * XSD Type: BoardingStructure
 */
class BoardingStructureType
{

    /**
     * Type of boarding and alighting allowed at stop. Default is Alighting
     *
     * @property string $arrivalBoardingActivity
     */
    private $arrivalBoardingActivity = null;

    /**
     * Type of alighting allowed at stop. Default is Boarding.
     *
     * @property string $departureBoardingActivity
     */
    private $departureBoardingActivity = null;

    /**
     * Gets as arrivalBoardingActivity
     *
     * Type of boarding and alighting allowed at stop. Default is Alighting
     *
     * @return string
     */
    public function getArrivalBoardingActivity()
    {
        return $this->arrivalBoardingActivity;
    }

    /**
     * Sets a new arrivalBoardingActivity
     *
     * Type of boarding and alighting allowed at stop. Default is Alighting
     *
     * @param string $arrivalBoardingActivity
     * @return self
     */
    public function setArrivalBoardingActivity($arrivalBoardingActivity)
    {
        $this->arrivalBoardingActivity = $arrivalBoardingActivity;
        return $this;
    }

    /**
     * Gets as departureBoardingActivity
     *
     * Type of alighting allowed at stop. Default is Boarding.
     *
     * @return string
     */
    public function getDepartureBoardingActivity()
    {
        return $this->departureBoardingActivity;
    }

    /**
     * Sets a new departureBoardingActivity
     *
     * Type of alighting allowed at stop. Default is Boarding.
     *
     * @param string $departureBoardingActivity
     * @return self
     */
    public function setDepartureBoardingActivity($departureBoardingActivity)
    {
        $this->departureBoardingActivity = $departureBoardingActivity;
        return $this;
    }


}

