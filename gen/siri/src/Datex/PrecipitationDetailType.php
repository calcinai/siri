<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing PrecipitationDetailType
 *
 * Details of precipitation (rain, snow etc.).
 * XSD Type: PrecipitationDetail
 */
class PrecipitationDetailType
{

    /**
     * The equivalent depth of the water layer resulting from precipitation or deposition on a non-porous horizontal surface. Non liquid precipitation are considered as melted in water.
     *
     * @property float $depositionDepth
     */
    private $depositionDepth = null;

    /**
     * The height of the precipitation received per unit time.
     *
     * @property float $precipitationIntensity
     */
    private $precipitationIntensity = null;

    /**
     * The type of precipitation which is affecting the driving conditions.
     *
     * @property string $precipitationType
     */
    private $precipitationType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $precipitationDetailExtension
     */
    private $precipitationDetailExtension = null;

    /**
     * Gets as depositionDepth
     *
     * The equivalent depth of the water layer resulting from precipitation or deposition on a non-porous horizontal surface. Non liquid precipitation are considered as melted in water.
     *
     * @return float
     */
    public function getDepositionDepth()
    {
        return $this->depositionDepth;
    }

    /**
     * Sets a new depositionDepth
     *
     * The equivalent depth of the water layer resulting from precipitation or deposition on a non-porous horizontal surface. Non liquid precipitation are considered as melted in water.
     *
     * @param float $depositionDepth
     * @return self
     */
    public function setDepositionDepth($depositionDepth)
    {
        $this->depositionDepth = $depositionDepth;
        return $this;
    }

    /**
     * Gets as precipitationIntensity
     *
     * The height of the precipitation received per unit time.
     *
     * @return float
     */
    public function getPrecipitationIntensity()
    {
        return $this->precipitationIntensity;
    }

    /**
     * Sets a new precipitationIntensity
     *
     * The height of the precipitation received per unit time.
     *
     * @param float $precipitationIntensity
     * @return self
     */
    public function setPrecipitationIntensity($precipitationIntensity)
    {
        $this->precipitationIntensity = $precipitationIntensity;
        return $this;
    }

    /**
     * Gets as precipitationType
     *
     * The type of precipitation which is affecting the driving conditions.
     *
     * @return string
     */
    public function getPrecipitationType()
    {
        return $this->precipitationType;
    }

    /**
     * Sets a new precipitationType
     *
     * The type of precipitation which is affecting the driving conditions.
     *
     * @param string $precipitationType
     * @return self
     */
    public function setPrecipitationType($precipitationType)
    {
        $this->precipitationType = $precipitationType;
        return $this;
    }

    /**
     * Gets as precipitationDetailExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getPrecipitationDetailExtension()
    {
        return $this->precipitationDetailExtension;
    }

    /**
     * Sets a new precipitationDetailExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $precipitationDetailExtension
     * @return self
     */
    public function setPrecipitationDetailExtension(\Calcinai\Siri\Datex\ExtensionType $precipitationDetailExtension)
    {
        $this->precipitationDetailExtension = $precipitationDetailExtension;
        return $this;
    }


}

