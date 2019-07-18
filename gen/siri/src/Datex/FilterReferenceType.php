<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing FilterReferenceType
 *
 * Details of a supplier's filter in a data exchange context.
 * XSD Type: FilterReference
 */
class FilterReferenceType
{

    /**
     * Indicates that a client defined filter has to be deleted.
     *
     * @property bool $deleteFilter
     */
    private $deleteFilter = null;

    /**
     * Indicates that a client defined filter was either stored or deleted successfully.
     *
     * @property bool $filterOperationApproved
     */
    private $filterOperationApproved = null;

    /**
     * The unique key identifier of a supplier applied filter.
     *
     * @property string $keyFilterReference
     */
    private $keyFilterReference = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $filterReferenceExtension
     */
    private $filterReferenceExtension = null;

    /**
     * Gets as deleteFilter
     *
     * Indicates that a client defined filter has to be deleted.
     *
     * @return bool
     */
    public function getDeleteFilter()
    {
        return $this->deleteFilter;
    }

    /**
     * Sets a new deleteFilter
     *
     * Indicates that a client defined filter has to be deleted.
     *
     * @param bool $deleteFilter
     * @return self
     */
    public function setDeleteFilter($deleteFilter)
    {
        $this->deleteFilter = $deleteFilter;
        return $this;
    }

    /**
     * Gets as filterOperationApproved
     *
     * Indicates that a client defined filter was either stored or deleted successfully.
     *
     * @return bool
     */
    public function getFilterOperationApproved()
    {
        return $this->filterOperationApproved;
    }

    /**
     * Sets a new filterOperationApproved
     *
     * Indicates that a client defined filter was either stored or deleted successfully.
     *
     * @param bool $filterOperationApproved
     * @return self
     */
    public function setFilterOperationApproved($filterOperationApproved)
    {
        $this->filterOperationApproved = $filterOperationApproved;
        return $this;
    }

    /**
     * Gets as keyFilterReference
     *
     * The unique key identifier of a supplier applied filter.
     *
     * @return string
     */
    public function getKeyFilterReference()
    {
        return $this->keyFilterReference;
    }

    /**
     * Sets a new keyFilterReference
     *
     * The unique key identifier of a supplier applied filter.
     *
     * @param string $keyFilterReference
     * @return self
     */
    public function setKeyFilterReference($keyFilterReference)
    {
        $this->keyFilterReference = $keyFilterReference;
        return $this;
    }

    /**
     * Gets as filterReferenceExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getFilterReferenceExtension()
    {
        return $this->filterReferenceExtension;
    }

    /**
     * Sets a new filterReferenceExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $filterReferenceExtension
     * @return self
     */
    public function setFilterReferenceExtension(\Calcinai\Siri\Datex\ExtensionType $filterReferenceExtension)
    {
        $this->filterReferenceExtension = $filterReferenceExtension;
        return $this;
    }


}

