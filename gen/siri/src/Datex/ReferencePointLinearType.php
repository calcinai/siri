<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing ReferencePointLinearType
 *
 * A linear section along a road defined between two points on the road identified by reference points.
 * XSD Type: ReferencePointLinear
 */
class ReferencePointLinearType
{

    /**
     * @property \Calcinai\Siri\Datex\ReferencePointPrimaryLocationType $referencePointPrimaryLocation
     */
    private $referencePointPrimaryLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\ReferencePointSecondaryLocationType $referencePointSecondaryLocation
     */
    private $referencePointSecondaryLocation = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $referencePointLinearExtension
     */
    private $referencePointLinearExtension = null;

    /**
     * Gets as referencePointPrimaryLocation
     *
     * @return \Calcinai\Siri\Datex\ReferencePointPrimaryLocationType
     */
    public function getReferencePointPrimaryLocation()
    {
        return $this->referencePointPrimaryLocation;
    }

    /**
     * Sets a new referencePointPrimaryLocation
     *
     * @param \Calcinai\Siri\Datex\ReferencePointPrimaryLocationType $referencePointPrimaryLocation
     * @return self
     */
    public function setReferencePointPrimaryLocation(\Calcinai\Siri\Datex\ReferencePointPrimaryLocationType $referencePointPrimaryLocation)
    {
        $this->referencePointPrimaryLocation = $referencePointPrimaryLocation;
        return $this;
    }

    /**
     * Gets as referencePointSecondaryLocation
     *
     * @return \Calcinai\Siri\Datex\ReferencePointSecondaryLocationType
     */
    public function getReferencePointSecondaryLocation()
    {
        return $this->referencePointSecondaryLocation;
    }

    /**
     * Sets a new referencePointSecondaryLocation
     *
     * @param \Calcinai\Siri\Datex\ReferencePointSecondaryLocationType $referencePointSecondaryLocation
     * @return self
     */
    public function setReferencePointSecondaryLocation(\Calcinai\Siri\Datex\ReferencePointSecondaryLocationType $referencePointSecondaryLocation)
    {
        $this->referencePointSecondaryLocation = $referencePointSecondaryLocation;
        return $this;
    }

    /**
     * Gets as referencePointLinearExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getReferencePointLinearExtension()
    {
        return $this->referencePointLinearExtension;
    }

    /**
     * Sets a new referencePointLinearExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $referencePointLinearExtension
     * @return self
     */
    public function setReferencePointLinearExtension(\Calcinai\Siri\Datex\ExtensionType $referencePointLinearExtension)
    {
        $this->referencePointLinearExtension = $referencePointLinearExtension;
        return $this;
    }


}

