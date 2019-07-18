<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing ReferencePointPrimaryLocationType
 *
 * The point (called Primary point) which is at the downstream end of a linear road section. The point is identified by a reference point.
 * XSD Type: ReferencePointPrimaryLocation
 */
class ReferencePointPrimaryLocationType
{

    /**
     * @property \Calcinai\Siri\Datex\ReferencePointType $referencePoint
     */
    private $referencePoint = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $referencePointPrimaryLocationExtension
     */
    private $referencePointPrimaryLocationExtension = null;

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
     * Gets as referencePointPrimaryLocationExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getReferencePointPrimaryLocationExtension()
    {
        return $this->referencePointPrimaryLocationExtension;
    }

    /**
     * Sets a new referencePointPrimaryLocationExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $referencePointPrimaryLocationExtension
     * @return self
     */
    public function setReferencePointPrimaryLocationExtension(\Calcinai\Siri\Datex\ExtensionType $referencePointPrimaryLocationExtension)
    {
        $this->referencePointPrimaryLocationExtension = $referencePointPrimaryLocationExtension;
        return $this;
    }


}

