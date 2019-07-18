<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TPEGAreaLocationType
 *
 * A geographic or geometric area defined by a TPEG-Loc structure which may include height information for additional geospatial descrimination.
 * XSD Type: TPEGAreaLocation
 */
class TPEGAreaLocationType
{

    /**
     * The type of TPEG loction.
     *
     * @property string $tpegLocationType
     */
    private $tpegLocationType = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\TPEGHeightType $tpegheight
     */
    private $tpegheight = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $tpegareaLocationExtension
     */
    private $tpegareaLocationExtension = null;

    /**
     * Gets as tpegLocationType
     *
     * The type of TPEG loction.
     *
     * @return string
     */
    public function getTpegLocationType()
    {
        return $this->tpegLocationType;
    }

    /**
     * Sets a new tpegLocationType
     *
     * The type of TPEG loction.
     *
     * @param string $tpegLocationType
     * @return self
     */
    public function setTpegLocationType($tpegLocationType)
    {
        $this->tpegLocationType = $tpegLocationType;
        return $this;
    }

    /**
     * Gets as tpegheight
     *
     * @return \Calcinai\Siri\Objects\Datex\TPEGHeightType
     */
    public function getTpegheight()
    {
        return $this->tpegheight;
    }

    /**
     * Sets a new tpegheight
     *
     * @param \Calcinai\Siri\Objects\Datex\TPEGHeightType $tpegheight
     * @return self
     */
    public function setTpegheight(\Calcinai\Siri\Objects\Datex\TPEGHeightType $tpegheight)
    {
        $this->tpegheight = $tpegheight;
        return $this;
    }

    /**
     * Gets as tpegareaLocationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTpegareaLocationExtension()
    {
        return $this->tpegareaLocationExtension;
    }

    /**
     * Sets a new tpegareaLocationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $tpegareaLocationExtension
     * @return self
     */
    public function setTpegareaLocationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $tpegareaLocationExtension)
    {
        $this->tpegareaLocationExtension = $tpegareaLocationExtension;
        return $this;
    }


}

