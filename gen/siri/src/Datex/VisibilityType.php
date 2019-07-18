<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing VisibilityType
 *
 * Details of atmospheric visibility.
 * XSD Type: Visibility
 */
class VisibilityType
{

    /**
     * The distance, measured or estimated, beyond which drivers may be unable to clearly see a vehicle or an obstacle.
     *
     * @property int $visibilityValue
     */
    private $visibilityValue = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $visibilityExtension
     */
    private $visibilityExtension = null;

    /**
     * Gets as visibilityValue
     *
     * The distance, measured or estimated, beyond which drivers may be unable to clearly see a vehicle or an obstacle.
     *
     * @return int
     */
    public function getVisibilityValue()
    {
        return $this->visibilityValue;
    }

    /**
     * Sets a new visibilityValue
     *
     * The distance, measured or estimated, beyond which drivers may be unable to clearly see a vehicle or an obstacle.
     *
     * @param int $visibilityValue
     * @return self
     */
    public function setVisibilityValue($visibilityValue)
    {
        $this->visibilityValue = $visibilityValue;
        return $this;
    }

    /**
     * Gets as visibilityExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getVisibilityExtension()
    {
        return $this->visibilityExtension;
    }

    /**
     * Sets a new visibilityExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $visibilityExtension
     * @return self
     */
    public function setVisibilityExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $visibilityExtension)
    {
        $this->visibilityExtension = $visibilityExtension;
        return $this;
    }


}

