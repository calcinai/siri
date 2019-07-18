<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ReferencePointLinearType
 *
 * A linear section along a road defined between two points on the road identified by reference points.
 * XSD Type: ReferencePointLinear
 */
class ReferencePointLinearType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\ReferencePointPrimaryLocationType $referencePointPrimaryLocation
     */
    private $referencePointPrimaryLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ReferencePointSecondaryLocationType $referencePointSecondaryLocation
     */
    private $referencePointSecondaryLocation = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $referencePointLinearExtension
     */
    private $referencePointLinearExtension = null;

    /**
     * Gets as referencePointPrimaryLocation
     *
     * @return \Calcinai\Siri\Objects\Datex\ReferencePointPrimaryLocationType
     */
    public function getReferencePointPrimaryLocation()
    {
        return $this->referencePointPrimaryLocation;
    }

    /**
     * Sets a new referencePointPrimaryLocation
     *
     * @param \Calcinai\Siri\Objects\Datex\ReferencePointPrimaryLocationType $referencePointPrimaryLocation
     * @return self
     */
    public function setReferencePointPrimaryLocation(\Calcinai\Siri\Objects\Datex\ReferencePointPrimaryLocationType $referencePointPrimaryLocation)
    {
        $this->referencePointPrimaryLocation = $referencePointPrimaryLocation;
        return $this;
    }

    /**
     * Gets as referencePointSecondaryLocation
     *
     * @return \Calcinai\Siri\Objects\Datex\ReferencePointSecondaryLocationType
     */
    public function getReferencePointSecondaryLocation()
    {
        return $this->referencePointSecondaryLocation;
    }

    /**
     * Sets a new referencePointSecondaryLocation
     *
     * @param \Calcinai\Siri\Objects\Datex\ReferencePointSecondaryLocationType $referencePointSecondaryLocation
     * @return self
     */
    public function setReferencePointSecondaryLocation(\Calcinai\Siri\Objects\Datex\ReferencePointSecondaryLocationType $referencePointSecondaryLocation)
    {
        $this->referencePointSecondaryLocation = $referencePointSecondaryLocation;
        return $this;
    }

    /**
     * Gets as referencePointLinearExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getReferencePointLinearExtension()
    {
        return $this->referencePointLinearExtension;
    }

    /**
     * Sets a new referencePointLinearExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $referencePointLinearExtension
     * @return self
     */
    public function setReferencePointLinearExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $referencePointLinearExtension)
    {
        $this->referencePointLinearExtension = $referencePointLinearExtension;
        return $this;
    }


}

