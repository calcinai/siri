<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing LinearType
 *
 * A linear section along a road with optional directionality defined between two points on the road.
 * XSD Type: Linear
 */
class LinearType extends NetworkLocationType
{

    /**
     * @property \Calcinai\Siri\Datex\TPEGLinearLocationType $tpeglinearLocation
     */
    private $tpeglinearLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\AlertCLinearType $alertCLinear
     */
    private $alertCLinear = null;

    /**
     * @property \Calcinai\Siri\Datex\ReferencePointLinearType $referencePointLinear
     */
    private $referencePointLinear = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $linearExtension
     */
    private $linearExtension = null;

    /**
     * Gets as tpeglinearLocation
     *
     * @return \Calcinai\Siri\Datex\TPEGLinearLocationType
     */
    public function getTpeglinearLocation()
    {
        return $this->tpeglinearLocation;
    }

    /**
     * Sets a new tpeglinearLocation
     *
     * @param \Calcinai\Siri\Datex\TPEGLinearLocationType $tpeglinearLocation
     * @return self
     */
    public function setTpeglinearLocation(\Calcinai\Siri\Datex\TPEGLinearLocationType $tpeglinearLocation)
    {
        $this->tpeglinearLocation = $tpeglinearLocation;
        return $this;
    }

    /**
     * Gets as alertCLinear
     *
     * @return \Calcinai\Siri\Datex\AlertCLinearType
     */
    public function getAlertCLinear()
    {
        return $this->alertCLinear;
    }

    /**
     * Sets a new alertCLinear
     *
     * @param \Calcinai\Siri\Datex\AlertCLinearType $alertCLinear
     * @return self
     */
    public function setAlertCLinear(\Calcinai\Siri\Datex\AlertCLinearType $alertCLinear)
    {
        $this->alertCLinear = $alertCLinear;
        return $this;
    }

    /**
     * Gets as referencePointLinear
     *
     * @return \Calcinai\Siri\Datex\ReferencePointLinearType
     */
    public function getReferencePointLinear()
    {
        return $this->referencePointLinear;
    }

    /**
     * Sets a new referencePointLinear
     *
     * @param \Calcinai\Siri\Datex\ReferencePointLinearType $referencePointLinear
     * @return self
     */
    public function setReferencePointLinear(\Calcinai\Siri\Datex\ReferencePointLinearType $referencePointLinear)
    {
        $this->referencePointLinear = $referencePointLinear;
        return $this;
    }

    /**
     * Gets as linearExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getLinearExtension()
    {
        return $this->linearExtension;
    }

    /**
     * Sets a new linearExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $linearExtension
     * @return self
     */
    public function setLinearExtension(\Calcinai\Siri\Datex\ExtensionType $linearExtension)
    {
        $this->linearExtension = $linearExtension;
        return $this;
    }


}

