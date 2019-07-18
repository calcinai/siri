<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing ReferenceSettingsType
 *
 * Specification of the default value for traffic status on a set of predefined locations on the road network. Only when traffic status differs from this value at a location in the set need a value be sent.
 * XSD Type: ReferenceSettings
 */
class ReferenceSettingsType
{

    /**
     * A reference to a predefined location set.
     *
     * @property string $locationSetReference
     */
    private $locationSetReference = null;

    /**
     * The default value of traffic status that can be assumed to apply to the locations defined by the associated predefined location set.
     *
     * @property string $trafficStatusDefault
     */
    private $trafficStatusDefault = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $referenceSettingsExtension
     */
    private $referenceSettingsExtension = null;

    /**
     * Gets as locationSetReference
     *
     * A reference to a predefined location set.
     *
     * @return string
     */
    public function getLocationSetReference()
    {
        return $this->locationSetReference;
    }

    /**
     * Sets a new locationSetReference
     *
     * A reference to a predefined location set.
     *
     * @param string $locationSetReference
     * @return self
     */
    public function setLocationSetReference($locationSetReference)
    {
        $this->locationSetReference = $locationSetReference;
        return $this;
    }

    /**
     * Gets as trafficStatusDefault
     *
     * The default value of traffic status that can be assumed to apply to the locations defined by the associated predefined location set.
     *
     * @return string
     */
    public function getTrafficStatusDefault()
    {
        return $this->trafficStatusDefault;
    }

    /**
     * Sets a new trafficStatusDefault
     *
     * The default value of traffic status that can be assumed to apply to the locations defined by the associated predefined location set.
     *
     * @param string $trafficStatusDefault
     * @return self
     */
    public function setTrafficStatusDefault($trafficStatusDefault)
    {
        $this->trafficStatusDefault = $trafficStatusDefault;
        return $this;
    }

    /**
     * Gets as referenceSettingsExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getReferenceSettingsExtension()
    {
        return $this->referenceSettingsExtension;
    }

    /**
     * Sets a new referenceSettingsExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $referenceSettingsExtension
     * @return self
     */
    public function setReferenceSettingsExtension(\Calcinai\Siri\Datex\ExtensionType $referenceSettingsExtension)
    {
        $this->referenceSettingsExtension = $referenceSettingsExtension;
        return $this;
    }


}

