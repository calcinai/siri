<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing CheckStatusRequestStructureType
 *
 * Type for check status request.
 * XSD Type: CheckStatusRequestStructure
 */
class CheckStatusRequestStructureType extends RequestStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

