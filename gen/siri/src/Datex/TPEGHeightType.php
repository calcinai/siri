<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing TPEGHeightType
 *
 * Height information which provides additional descrimination for the applicable area.
 * XSD Type: TPEGHeight
 */
class TPEGHeightType
{

    /**
     * A measurement of height using TPEG-Loc location referencing.
     *
     * @property float $height
     */
    private $height = null;

    /**
     * A descriptive identification of relative height using TPEG-Loc location referencing.
     *
     * @property string $heightType
     */
    private $heightType = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $tpegheightExtension
     */
    private $tpegheightExtension = null;

    /**
     * Gets as height
     *
     * A measurement of height using TPEG-Loc location referencing.
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * A measurement of height using TPEG-Loc location referencing.
     *
     * @param float $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as heightType
     *
     * A descriptive identification of relative height using TPEG-Loc location referencing.
     *
     * @return string
     */
    public function getHeightType()
    {
        return $this->heightType;
    }

    /**
     * Sets a new heightType
     *
     * A descriptive identification of relative height using TPEG-Loc location referencing.
     *
     * @param string $heightType
     * @return self
     */
    public function setHeightType($heightType)
    {
        $this->heightType = $heightType;
        return $this;
    }

    /**
     * Gets as tpegheightExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getTpegheightExtension()
    {
        return $this->tpegheightExtension;
    }

    /**
     * Sets a new tpegheightExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $tpegheightExtension
     * @return self
     */
    public function setTpegheightExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $tpegheightExtension)
    {
        $this->tpegheightExtension = $tpegheightExtension;
        return $this;
    }


}

