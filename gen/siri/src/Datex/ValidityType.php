<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ValidityType
 *
 * Specification of validity, either explicitly or by a validity time period specification which may be discontinous.
 * XSD Type: Validity
 */
class ValidityType
{

    /**
     * Specification of validity, either explicitly overriding the validity time specification or confirming it.
     *
     * @property string $validityStatus
     */
    private $validityStatus = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\OverallPeriodType $validityTimeSpecification
     */
    private $validityTimeSpecification = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $validityExtension
     */
    private $validityExtension = null;

    /**
     * Gets as validityStatus
     *
     * Specification of validity, either explicitly overriding the validity time specification or confirming it.
     *
     * @return string
     */
    public function getValidityStatus()
    {
        return $this->validityStatus;
    }

    /**
     * Sets a new validityStatus
     *
     * Specification of validity, either explicitly overriding the validity time specification or confirming it.
     *
     * @param string $validityStatus
     * @return self
     */
    public function setValidityStatus($validityStatus)
    {
        $this->validityStatus = $validityStatus;
        return $this;
    }

    /**
     * Gets as validityTimeSpecification
     *
     * @return \Calcinai\Siri\Objects\Datex\OverallPeriodType
     */
    public function getValidityTimeSpecification()
    {
        return $this->validityTimeSpecification;
    }

    /**
     * Sets a new validityTimeSpecification
     *
     * @param \Calcinai\Siri\Objects\Datex\OverallPeriodType $validityTimeSpecification
     * @return self
     */
    public function setValidityTimeSpecification(\Calcinai\Siri\Objects\Datex\OverallPeriodType $validityTimeSpecification)
    {
        $this->validityTimeSpecification = $validityTimeSpecification;
        return $this;
    }

    /**
     * Gets as validityExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getValidityExtension()
    {
        return $this->validityExtension;
    }

    /**
     * Sets a new validityExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $validityExtension
     * @return self
     */
    public function setValidityExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $validityExtension)
    {
        $this->validityExtension = $validityExtension;
        return $this;
    }


}

