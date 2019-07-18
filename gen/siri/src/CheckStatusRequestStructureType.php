<?php

namespace Calcinai\Siri;

/**
 * Class representing CheckStatusRequestStructureType
 *
 * Type for check status request.
 * XSD Type: CheckStatusRequestStructure
 */
class CheckStatusRequestStructureType extends RequestStructureType
{

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

