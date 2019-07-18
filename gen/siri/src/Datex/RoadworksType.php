<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing RoadworksType
 *
 * Highway maintenance, installation and construction activities that may potentially affect traffic operations.
 * XSD Type: Roadworks
 */
class RoadworksType extends OperatorActionType
{

    /**
     * The effects which the roadworks have or are expected to have on the road layout.
     *
     * @property string[] $effectOnRoadLayout
     */
    private $effectOnRoadLayout = [
        
    ];

    /**
     * Indicates in general terms the expected duration of the roadworks.
     *
     * @property string $roadworksDuration
     */
    private $roadworksDuration = null;

    /**
     * Indicates in general terms the scale of the roadworks.
     *
     * @property string $roadworksScale
     */
    private $roadworksScale = null;

    /**
     * Indicates that the road section where the roadworks are located is trafficked or non-trafficked.
     *
     * @property bool $underTraffic
     */
    private $underTraffic = null;

    /**
     * Indication of whether the roadworks are considered to be urgent. 'True' indicates they are urgent.
     *
     * @property bool $urgentRoadworks
     */
    private $urgentRoadworks = null;

    /**
     * @property \Calcinai\Siri\Datex\MobilityType $mobility
     */
    private $mobility = null;

    /**
     * @property \Calcinai\Siri\Datex\SubjectTypeOfWorksType $subjectTypeOfWorks
     */
    private $subjectTypeOfWorks = null;

    /**
     * @property \Calcinai\Siri\Datex\AssociatedMaintenanceVehiclesType $associatedMaintenanceVehicles
     */
    private $associatedMaintenanceVehicles = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $roadworksExtension
     */
    private $roadworksExtension = null;

    /**
     * Adds as effectOnRoadLayout
     *
     * The effects which the roadworks have or are expected to have on the road layout.
     *
     * @return self
     * @param string $effectOnRoadLayout
     */
    public function addToEffectOnRoadLayout($effectOnRoadLayout)
    {
        $this->effectOnRoadLayout[] = $effectOnRoadLayout;
        return $this;
    }

    /**
     * isset effectOnRoadLayout
     *
     * The effects which the roadworks have or are expected to have on the road layout.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEffectOnRoadLayout($index)
    {
        return isset($this->effectOnRoadLayout[$index]);
    }

    /**
     * unset effectOnRoadLayout
     *
     * The effects which the roadworks have or are expected to have on the road layout.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEffectOnRoadLayout($index)
    {
        unset($this->effectOnRoadLayout[$index]);
    }

    /**
     * Gets as effectOnRoadLayout
     *
     * The effects which the roadworks have or are expected to have on the road layout.
     *
     * @return string[]
     */
    public function getEffectOnRoadLayout()
    {
        return $this->effectOnRoadLayout;
    }

    /**
     * Sets a new effectOnRoadLayout
     *
     * The effects which the roadworks have or are expected to have on the road layout.
     *
     * @param string $effectOnRoadLayout
     * @return self
     */
    public function setEffectOnRoadLayout(array $effectOnRoadLayout)
    {
        $this->effectOnRoadLayout = $effectOnRoadLayout;
        return $this;
    }

    /**
     * Gets as roadworksDuration
     *
     * Indicates in general terms the expected duration of the roadworks.
     *
     * @return string
     */
    public function getRoadworksDuration()
    {
        return $this->roadworksDuration;
    }

    /**
     * Sets a new roadworksDuration
     *
     * Indicates in general terms the expected duration of the roadworks.
     *
     * @param string $roadworksDuration
     * @return self
     */
    public function setRoadworksDuration($roadworksDuration)
    {
        $this->roadworksDuration = $roadworksDuration;
        return $this;
    }

    /**
     * Gets as roadworksScale
     *
     * Indicates in general terms the scale of the roadworks.
     *
     * @return string
     */
    public function getRoadworksScale()
    {
        return $this->roadworksScale;
    }

    /**
     * Sets a new roadworksScale
     *
     * Indicates in general terms the scale of the roadworks.
     *
     * @param string $roadworksScale
     * @return self
     */
    public function setRoadworksScale($roadworksScale)
    {
        $this->roadworksScale = $roadworksScale;
        return $this;
    }

    /**
     * Gets as underTraffic
     *
     * Indicates that the road section where the roadworks are located is trafficked or non-trafficked.
     *
     * @return bool
     */
    public function getUnderTraffic()
    {
        return $this->underTraffic;
    }

    /**
     * Sets a new underTraffic
     *
     * Indicates that the road section where the roadworks are located is trafficked or non-trafficked.
     *
     * @param bool $underTraffic
     * @return self
     */
    public function setUnderTraffic($underTraffic)
    {
        $this->underTraffic = $underTraffic;
        return $this;
    }

    /**
     * Gets as urgentRoadworks
     *
     * Indication of whether the roadworks are considered to be urgent. 'True' indicates they are urgent.
     *
     * @return bool
     */
    public function getUrgentRoadworks()
    {
        return $this->urgentRoadworks;
    }

    /**
     * Sets a new urgentRoadworks
     *
     * Indication of whether the roadworks are considered to be urgent. 'True' indicates they are urgent.
     *
     * @param bool $urgentRoadworks
     * @return self
     */
    public function setUrgentRoadworks($urgentRoadworks)
    {
        $this->urgentRoadworks = $urgentRoadworks;
        return $this;
    }

    /**
     * Gets as mobility
     *
     * @return \Calcinai\Siri\Datex\MobilityType
     */
    public function getMobility()
    {
        return $this->mobility;
    }

    /**
     * Sets a new mobility
     *
     * @param \Calcinai\Siri\Datex\MobilityType $mobility
     * @return self
     */
    public function setMobility(\Calcinai\Siri\Datex\MobilityType $mobility)
    {
        $this->mobility = $mobility;
        return $this;
    }

    /**
     * Gets as subjectTypeOfWorks
     *
     * @return \Calcinai\Siri\Datex\SubjectTypeOfWorksType
     */
    public function getSubjectTypeOfWorks()
    {
        return $this->subjectTypeOfWorks;
    }

    /**
     * Sets a new subjectTypeOfWorks
     *
     * @param \Calcinai\Siri\Datex\SubjectTypeOfWorksType $subjectTypeOfWorks
     * @return self
     */
    public function setSubjectTypeOfWorks(\Calcinai\Siri\Datex\SubjectTypeOfWorksType $subjectTypeOfWorks)
    {
        $this->subjectTypeOfWorks = $subjectTypeOfWorks;
        return $this;
    }

    /**
     * Gets as associatedMaintenanceVehicles
     *
     * @return \Calcinai\Siri\Datex\AssociatedMaintenanceVehiclesType
     */
    public function getAssociatedMaintenanceVehicles()
    {
        return $this->associatedMaintenanceVehicles;
    }

    /**
     * Sets a new associatedMaintenanceVehicles
     *
     * @param \Calcinai\Siri\Datex\AssociatedMaintenanceVehiclesType $associatedMaintenanceVehicles
     * @return self
     */
    public function setAssociatedMaintenanceVehicles(\Calcinai\Siri\Datex\AssociatedMaintenanceVehiclesType $associatedMaintenanceVehicles)
    {
        $this->associatedMaintenanceVehicles = $associatedMaintenanceVehicles;
        return $this;
    }

    /**
     * Gets as roadworksExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getRoadworksExtension()
    {
        return $this->roadworksExtension;
    }

    /**
     * Sets a new roadworksExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $roadworksExtension
     * @return self
     */
    public function setRoadworksExtension(\Calcinai\Siri\Datex\ExtensionType $roadworksExtension)
    {
        $this->roadworksExtension = $roadworksExtension;
        return $this;
    }


}

