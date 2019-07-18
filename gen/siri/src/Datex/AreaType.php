<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing AreaType
 *
 * A geographic or geometric defined area which may be qualified by height information to provide additional geospatial descrimination (e.g. for snow in an area but only above a certain altitude).
 * XSD Type: Area
 */
class AreaType extends LocationType
{

    /**
     * @property \Calcinai\Siri\Datex\AlertCAreaType $alertCArea
     */
    private $alertCArea = null;

    /**
     * @property \Calcinai\Siri\Datex\TPEGAreaLocationType $tpegareaLocation
     */
    private $tpegareaLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $areaExtension
     */
    private $areaExtension = null;

    /**
     * Gets as alertCArea
     *
     * @return \Calcinai\Siri\Datex\AlertCAreaType
     */
    public function getAlertCArea()
    {
        return $this->alertCArea;
    }

    /**
     * Sets a new alertCArea
     *
     * @param \Calcinai\Siri\Datex\AlertCAreaType $alertCArea
     * @return self
     */
    public function setAlertCArea(\Calcinai\Siri\Datex\AlertCAreaType $alertCArea)
    {
        $this->alertCArea = $alertCArea;
        return $this;
    }

    /**
     * Gets as tpegareaLocation
     *
     * @return \Calcinai\Siri\Datex\TPEGAreaLocationType
     */
    public function getTpegareaLocation()
    {
        return $this->tpegareaLocation;
    }

    /**
     * Sets a new tpegareaLocation
     *
     * @param \Calcinai\Siri\Datex\TPEGAreaLocationType $tpegareaLocation
     * @return self
     */
    public function setTpegareaLocation(\Calcinai\Siri\Datex\TPEGAreaLocationType $tpegareaLocation)
    {
        $this->tpegareaLocation = $tpegareaLocation;
        return $this;
    }

    /**
     * Gets as areaExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getAreaExtension()
    {
        return $this->areaExtension;
    }

    /**
     * Sets a new areaExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $areaExtension
     * @return self
     */
    public function setAreaExtension(\Calcinai\Siri\Datex\ExtensionType $areaExtension)
    {
        $this->areaExtension = $areaExtension;
        return $this;
    }


}

