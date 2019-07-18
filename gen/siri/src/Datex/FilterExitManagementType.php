<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing FilterExitManagementType
 *
 * Filter indicators management information.
 * XSD Type: FilterExitManagement
 */
class FilterExitManagementType
{

    /**
     * This attribute, set to true, indicates that the filter, for which a previous record version has been published, becomes inactive.
     *
     * @property bool $filterEnd
     */
    private $filterEnd = null;

    /**
     * This attribute is set to true when a previous version of this record has been published and now, for this new record version, the record goes out of the filter range.
     *
     * @property bool $filterOutOfRange
     */
    private $filterOutOfRange = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $filterExitManagementExtension
     */
    private $filterExitManagementExtension = null;

    /**
     * Gets as filterEnd
     *
     * This attribute, set to true, indicates that the filter, for which a previous record version has been published, becomes inactive.
     *
     * @return bool
     */
    public function getFilterEnd()
    {
        return $this->filterEnd;
    }

    /**
     * Sets a new filterEnd
     *
     * This attribute, set to true, indicates that the filter, for which a previous record version has been published, becomes inactive.
     *
     * @param bool $filterEnd
     * @return self
     */
    public function setFilterEnd($filterEnd)
    {
        $this->filterEnd = $filterEnd;
        return $this;
    }

    /**
     * Gets as filterOutOfRange
     *
     * This attribute is set to true when a previous version of this record has been published and now, for this new record version, the record goes out of the filter range.
     *
     * @return bool
     */
    public function getFilterOutOfRange()
    {
        return $this->filterOutOfRange;
    }

    /**
     * Sets a new filterOutOfRange
     *
     * This attribute is set to true when a previous version of this record has been published and now, for this new record version, the record goes out of the filter range.
     *
     * @param bool $filterOutOfRange
     * @return self
     */
    public function setFilterOutOfRange($filterOutOfRange)
    {
        $this->filterOutOfRange = $filterOutOfRange;
        return $this;
    }

    /**
     * Gets as filterExitManagementExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getFilterExitManagementExtension()
    {
        return $this->filterExitManagementExtension;
    }

    /**
     * Sets a new filterExitManagementExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $filterExitManagementExtension
     * @return self
     */
    public function setFilterExitManagementExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $filterExitManagementExtension)
    {
        $this->filterExitManagementExtension = $filterExitManagementExtension;
        return $this;
    }


}

