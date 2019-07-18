<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing AdviceType
 *
 * Information/advice that supplements the traffic/travel information contained in a situation publication.
 * XSD Type: Advice
 */
class AdviceType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $adviceExtension
     */
    private $adviceExtension = null;

    /**
     * Gets as adviceExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getAdviceExtension()
    {
        return $this->adviceExtension;
    }

    /**
     * Sets a new adviceExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $adviceExtension
     * @return self
     */
    public function setAdviceExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $adviceExtension)
    {
        $this->adviceExtension = $adviceExtension;
        return $this;
    }


}

