<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing RoadsideAssistanceType
 *
 * Details of road side assistance required.
 * XSD Type: RoadsideAssistance
 */
class RoadsideAssistanceType extends OperatorActionType
{

    /**
     * Indicates the nature of the road side assistance that will be, is or has been provided.
     *
     * @property string $roadsideAssistanceType
     */
    private $roadsideAssistanceType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $roadsideAssistanceExtension
     */
    private $roadsideAssistanceExtension = null;

    /**
     * Gets as roadsideAssistanceType
     *
     * Indicates the nature of the road side assistance that will be, is or has been provided.
     *
     * @return string
     */
    public function getRoadsideAssistanceType()
    {
        return $this->roadsideAssistanceType;
    }

    /**
     * Sets a new roadsideAssistanceType
     *
     * Indicates the nature of the road side assistance that will be, is or has been provided.
     *
     * @param string $roadsideAssistanceType
     * @return self
     */
    public function setRoadsideAssistanceType($roadsideAssistanceType)
    {
        $this->roadsideAssistanceType = $roadsideAssistanceType;
        return $this;
    }

    /**
     * Gets as roadsideAssistanceExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getRoadsideAssistanceExtension()
    {
        return $this->roadsideAssistanceExtension;
    }

    /**
     * Sets a new roadsideAssistanceExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $roadsideAssistanceExtension
     * @return self
     */
    public function setRoadsideAssistanceExtension(\Calcinai\Siri\Datex\ExtensionType $roadsideAssistanceExtension)
    {
        $this->roadsideAssistanceExtension = $roadsideAssistanceExtension;
        return $this;
    }


}

