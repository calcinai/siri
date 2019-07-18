<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing SiteMeasurementsType
 *
 * A measurement data set derived from a specific measurement site.
 * XSD Type: SiteMeasurements
 */
class SiteMeasurementsType
{

    /**
     * A reference to a measurement site defined in a Measurement Site table.
     *
     * @property string $measurementSiteReference
     */
    private $measurementSiteReference = null;

    /**
     * The time associated with the set of measurements. It may be the time of the beginning, the end or the middle of the measurement period.
     *
     * @property \DateTime $measurementTimeDefault
     */
    private $measurementTimeDefault = null;

    /**
     * @property \Calcinai\Siri\Datex\SiteMeasurementsType\MeasuredValueAType[] $measuredValue
     */
    private $measuredValue = [
        
    ];

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $siteMeasurementsExtension
     */
    private $siteMeasurementsExtension = null;

    /**
     * Gets as measurementSiteReference
     *
     * A reference to a measurement site defined in a Measurement Site table.
     *
     * @return string
     */
    public function getMeasurementSiteReference()
    {
        return $this->measurementSiteReference;
    }

    /**
     * Sets a new measurementSiteReference
     *
     * A reference to a measurement site defined in a Measurement Site table.
     *
     * @param string $measurementSiteReference
     * @return self
     */
    public function setMeasurementSiteReference($measurementSiteReference)
    {
        $this->measurementSiteReference = $measurementSiteReference;
        return $this;
    }

    /**
     * Gets as measurementTimeDefault
     *
     * The time associated with the set of measurements. It may be the time of the beginning, the end or the middle of the measurement period.
     *
     * @return \DateTime
     */
    public function getMeasurementTimeDefault()
    {
        return $this->measurementTimeDefault;
    }

    /**
     * Sets a new measurementTimeDefault
     *
     * The time associated with the set of measurements. It may be the time of the beginning, the end or the middle of the measurement period.
     *
     * @param \DateTime $measurementTimeDefault
     * @return self
     */
    public function setMeasurementTimeDefault(\DateTime $measurementTimeDefault)
    {
        $this->measurementTimeDefault = $measurementTimeDefault;
        return $this;
    }

    /**
     * Adds as measuredValue
     *
     * @return self
     * @param \Calcinai\Siri\Datex\SiteMeasurementsType\MeasuredValueAType $measuredValue
     */
    public function addToMeasuredValue(\Calcinai\Siri\Datex\SiteMeasurementsType\MeasuredValueAType $measuredValue)
    {
        $this->measuredValue[] = $measuredValue;
        return $this;
    }

    /**
     * isset measuredValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasuredValue($index)
    {
        return isset($this->measuredValue[$index]);
    }

    /**
     * unset measuredValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasuredValue($index)
    {
        unset($this->measuredValue[$index]);
    }

    /**
     * Gets as measuredValue
     *
     * @return \Calcinai\Siri\Datex\SiteMeasurementsType\MeasuredValueAType[]
     */
    public function getMeasuredValue()
    {
        return $this->measuredValue;
    }

    /**
     * Sets a new measuredValue
     *
     * @param \Calcinai\Siri\Datex\SiteMeasurementsType\MeasuredValueAType[] $measuredValue
     * @return self
     */
    public function setMeasuredValue(array $measuredValue)
    {
        $this->measuredValue = $measuredValue;
        return $this;
    }

    /**
     * Gets as siteMeasurementsExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getSiteMeasurementsExtension()
    {
        return $this->siteMeasurementsExtension;
    }

    /**
     * Sets a new siteMeasurementsExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $siteMeasurementsExtension
     * @return self
     */
    public function setSiteMeasurementsExtension(\Calcinai\Siri\Datex\ExtensionType $siteMeasurementsExtension)
    {
        $this->siteMeasurementsExtension = $siteMeasurementsExtension;
        return $this;
    }


}

