<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing DataSupplyRequestBodyStructureType
 *
 * Type for Body of Data Supply Request. Used in WSDL
 * XSD Type: DataSupplyRequestBodyStructure
 */
class DataSupplyRequestBodyStructureType
{

    /**
     * Identifier of specific notification message for which data is to be fetched. Can be used to distinguish between notfcatiosn for the same service and subscriber but for different filters.If none specified,
     *
     * @property string $notificationRef
     */
    private $notificationRef = null;

    /**
     * Whether to return all data, or just new updates since the last delivery. Default false, i.e. just updates.
     *
     * @property bool $allData
     */
    private $allData = null;

    /**
     * Gets as notificationRef
     *
     * Identifier of specific notification message for which data is to be fetched. Can be used to distinguish between notfcatiosn for the same service and subscriber but for different filters.If none specified,
     *
     * @return string
     */
    public function getNotificationRef()
    {
        return $this->notificationRef;
    }

    /**
     * Sets a new notificationRef
     *
     * Identifier of specific notification message for which data is to be fetched. Can be used to distinguish between notfcatiosn for the same service and subscriber but for different filters.If none specified,
     *
     * @param string $notificationRef
     * @return self
     */
    public function setNotificationRef($notificationRef)
    {
        $this->notificationRef = $notificationRef;
        return $this;
    }

    /**
     * Gets as allData
     *
     * Whether to return all data, or just new updates since the last delivery. Default false, i.e. just updates.
     *
     * @return bool
     */
    public function getAllData()
    {
        return $this->allData;
    }

    /**
     * Sets a new allData
     *
     * Whether to return all data, or just new updates since the last delivery. Default false, i.e. just updates.
     *
     * @param bool $allData
     * @return self
     */
    public function setAllData($allData)
    {
        $this->allData = $allData;
        return $this;
    }


}

