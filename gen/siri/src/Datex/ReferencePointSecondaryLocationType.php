<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing ReferencePointSecondaryLocationType
 *
 * The point (called Secondary point) which is at the upstream end of a linear road section. The point is identified by a reference point.
 * XSD Type: ReferencePointSecondaryLocation
 */
class ReferencePointSecondaryLocationType
{

    /**
     * @property \Calcinai\Siri\Datex\ReferencePointType $referencePoint
     */
    private $referencePoint = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $referencePointSecondaryLocationExtension
     */
    private $referencePointSecondaryLocationExtension = null;

    /**
     * Gets as referencePoint
     *
     * @return \Calcinai\Siri\Datex\ReferencePointType
     */
    public function getReferencePoint()
    {
        return $this->referencePoint;
    }

    /**
     * Sets a new referencePoint
     *
     * @param \Calcinai\Siri\Datex\ReferencePointType $referencePoint
     * @return self
     */
    public function setReferencePoint(\Calcinai\Siri\Datex\ReferencePointType $referencePoint)
    {
        $this->referencePoint = $referencePoint;
        return $this;
    }

    /**
     * Gets as referencePointSecondaryLocationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getReferencePointSecondaryLocationExtension()
    {
        return $this->referencePointSecondaryLocationExtension;
    }

    /**
     * Sets a new referencePointSecondaryLocationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $referencePointSecondaryLocationExtension
     * @return self
     */
    public function setReferencePointSecondaryLocationExtension(\Calcinai\Siri\Datex\ExtensionType $referencePointSecondaryLocationExtension)
    {
        $this->referencePointSecondaryLocationExtension = $referencePointSecondaryLocationExtension;
        return $this;
    }


}

