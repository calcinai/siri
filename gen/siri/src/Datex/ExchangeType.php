<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ExchangeType
 *
 * Details associated with the management of the exchange between the supplier and the client.
 * XSD Type: Exchange
 */
class ExchangeType
{

    /**
     * Indicates that either a filter or a catalogue has been changed.
     *
     * @property string $changedFlag
     */
    private $changedFlag = null;

    /**
     * In a data exchange process, an identifier of the organisation or group of organisations which receives information from the DATEX II supplier system.
     *
     * @property string $clientIdentification
     */
    private $clientIdentification = null;

    /**
     * Indicates that a data delivery is stopped for unplanned reasons, i.e. excluding the end of the order validity (attribute FIL) or the case when the filter expression is not met (attribute OOR).
     *
     * @property bool $deliveryBreak
     */
    private $deliveryBreak = null;

    /**
     * Indicates the reason for the refusal of the requested exchange.
     *
     * @property string $denyReason
     */
    private $denyReason = null;

    /**
     * Self-explanatory
     *
     * @property \DateTime $historicalStartDate
     */
    private $historicalStartDate = null;

    /**
     * Self-explanatory
     *
     * @property \DateTime $historicalStopDate
     */
    private $historicalStopDate = null;

    /**
     * Indicator that this exchange is due to "keep alive" functionality.
     *
     * @property bool $keepAlive
     */
    private $keepAlive = null;

    /**
     * The types of request that has been made by the client on the supplier.
     *
     * @property string $requestType
     */
    private $requestType = null;

    /**
     * The type of the response that the supplier is returning to the requesting client.
     *
     * @property string $response
     */
    private $response = null;

    /**
     * Unique identifier of the client's subscription with the supplier.
     *
     * @property string $subscriptionReference
     */
    private $subscriptionReference = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\InternationalIdentifierType $supplierIdentification
     */
    private $supplierIdentification = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\TargetType $target
     */
    private $target = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\SubscriptionType $subscription
     */
    private $subscription = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\FilterReferenceType[] $filterReference
     */
    private $filterReference = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\CatalogueReferenceType[] $catalogueReference
     */
    private $catalogueReference = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $exchangeExtension
     */
    private $exchangeExtension = null;

    /**
     * Gets as changedFlag
     *
     * Indicates that either a filter or a catalogue has been changed.
     *
     * @return string
     */
    public function getChangedFlag()
    {
        return $this->changedFlag;
    }

    /**
     * Sets a new changedFlag
     *
     * Indicates that either a filter or a catalogue has been changed.
     *
     * @param string $changedFlag
     * @return self
     */
    public function setChangedFlag($changedFlag)
    {
        $this->changedFlag = $changedFlag;
        return $this;
    }

    /**
     * Gets as clientIdentification
     *
     * In a data exchange process, an identifier of the organisation or group of organisations which receives information from the DATEX II supplier system.
     *
     * @return string
     */
    public function getClientIdentification()
    {
        return $this->clientIdentification;
    }

    /**
     * Sets a new clientIdentification
     *
     * In a data exchange process, an identifier of the organisation or group of organisations which receives information from the DATEX II supplier system.
     *
     * @param string $clientIdentification
     * @return self
     */
    public function setClientIdentification($clientIdentification)
    {
        $this->clientIdentification = $clientIdentification;
        return $this;
    }

    /**
     * Gets as deliveryBreak
     *
     * Indicates that a data delivery is stopped for unplanned reasons, i.e. excluding the end of the order validity (attribute FIL) or the case when the filter expression is not met (attribute OOR).
     *
     * @return bool
     */
    public function getDeliveryBreak()
    {
        return $this->deliveryBreak;
    }

    /**
     * Sets a new deliveryBreak
     *
     * Indicates that a data delivery is stopped for unplanned reasons, i.e. excluding the end of the order validity (attribute FIL) or the case when the filter expression is not met (attribute OOR).
     *
     * @param bool $deliveryBreak
     * @return self
     */
    public function setDeliveryBreak($deliveryBreak)
    {
        $this->deliveryBreak = $deliveryBreak;
        return $this;
    }

    /**
     * Gets as denyReason
     *
     * Indicates the reason for the refusal of the requested exchange.
     *
     * @return string
     */
    public function getDenyReason()
    {
        return $this->denyReason;
    }

    /**
     * Sets a new denyReason
     *
     * Indicates the reason for the refusal of the requested exchange.
     *
     * @param string $denyReason
     * @return self
     */
    public function setDenyReason($denyReason)
    {
        $this->denyReason = $denyReason;
        return $this;
    }

    /**
     * Gets as historicalStartDate
     *
     * Self-explanatory
     *
     * @return \DateTime
     */
    public function getHistoricalStartDate()
    {
        return $this->historicalStartDate;
    }

    /**
     * Sets a new historicalStartDate
     *
     * Self-explanatory
     *
     * @param \DateTime $historicalStartDate
     * @return self
     */
    public function setHistoricalStartDate(\DateTime $historicalStartDate)
    {
        $this->historicalStartDate = $historicalStartDate;
        return $this;
    }

    /**
     * Gets as historicalStopDate
     *
     * Self-explanatory
     *
     * @return \DateTime
     */
    public function getHistoricalStopDate()
    {
        return $this->historicalStopDate;
    }

    /**
     * Sets a new historicalStopDate
     *
     * Self-explanatory
     *
     * @param \DateTime $historicalStopDate
     * @return self
     */
    public function setHistoricalStopDate(\DateTime $historicalStopDate)
    {
        $this->historicalStopDate = $historicalStopDate;
        return $this;
    }

    /**
     * Gets as keepAlive
     *
     * Indicator that this exchange is due to "keep alive" functionality.
     *
     * @return bool
     */
    public function getKeepAlive()
    {
        return $this->keepAlive;
    }

    /**
     * Sets a new keepAlive
     *
     * Indicator that this exchange is due to "keep alive" functionality.
     *
     * @param bool $keepAlive
     * @return self
     */
    public function setKeepAlive($keepAlive)
    {
        $this->keepAlive = $keepAlive;
        return $this;
    }

    /**
     * Gets as requestType
     *
     * The types of request that has been made by the client on the supplier.
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Sets a new requestType
     *
     * The types of request that has been made by the client on the supplier.
     *
     * @param string $requestType
     * @return self
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
        return $this;
    }

    /**
     * Gets as response
     *
     * The type of the response that the supplier is returning to the requesting client.
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * The type of the response that the supplier is returning to the requesting client.
     *
     * @param string $response
     * @return self
     */
    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets as subscriptionReference
     *
     * Unique identifier of the client's subscription with the supplier.
     *
     * @return string
     */
    public function getSubscriptionReference()
    {
        return $this->subscriptionReference;
    }

    /**
     * Sets a new subscriptionReference
     *
     * Unique identifier of the client's subscription with the supplier.
     *
     * @param string $subscriptionReference
     * @return self
     */
    public function setSubscriptionReference($subscriptionReference)
    {
        $this->subscriptionReference = $subscriptionReference;
        return $this;
    }

    /**
     * Gets as supplierIdentification
     *
     * @return \Calcinai\Siri\Objects\Datex\InternationalIdentifierType
     */
    public function getSupplierIdentification()
    {
        return $this->supplierIdentification;
    }

    /**
     * Sets a new supplierIdentification
     *
     * @param \Calcinai\Siri\Objects\Datex\InternationalIdentifierType $supplierIdentification
     * @return self
     */
    public function setSupplierIdentification(\Calcinai\Siri\Objects\Datex\InternationalIdentifierType $supplierIdentification)
    {
        $this->supplierIdentification = $supplierIdentification;
        return $this;
    }

    /**
     * Gets as target
     *
     * @return \Calcinai\Siri\Objects\Datex\TargetType
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * @param \Calcinai\Siri\Objects\Datex\TargetType $target
     * @return self
     */
    public function setTarget(\Calcinai\Siri\Objects\Datex\TargetType $target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as subscription
     *
     * @return \Calcinai\Siri\Objects\Datex\SubscriptionType
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Sets a new subscription
     *
     * @param \Calcinai\Siri\Objects\Datex\SubscriptionType $subscription
     * @return self
     */
    public function setSubscription(\Calcinai\Siri\Objects\Datex\SubscriptionType $subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * Adds as filterReference
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\FilterReferenceType $filterReference
     */
    public function addToFilterReference(\Calcinai\Siri\Objects\Datex\FilterReferenceType $filterReference)
    {
        $this->filterReference[] = $filterReference;
        return $this;
    }

    /**
     * isset filterReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFilterReference($index)
    {
        return isset($this->filterReference[$index]);
    }

    /**
     * unset filterReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFilterReference($index)
    {
        unset($this->filterReference[$index]);
    }

    /**
     * Gets as filterReference
     *
     * @return \Calcinai\Siri\Objects\Datex\FilterReferenceType[]
     */
    public function getFilterReference()
    {
        return $this->filterReference;
    }

    /**
     * Sets a new filterReference
     *
     * @param \Calcinai\Siri\Objects\Datex\FilterReferenceType[] $filterReference
     * @return self
     */
    public function setFilterReference(array $filterReference)
    {
        $this->filterReference = $filterReference;
        return $this;
    }

    /**
     * Adds as catalogueReference
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\CatalogueReferenceType $catalogueReference
     */
    public function addToCatalogueReference(\Calcinai\Siri\Objects\Datex\CatalogueReferenceType $catalogueReference)
    {
        $this->catalogueReference[] = $catalogueReference;
        return $this;
    }

    /**
     * isset catalogueReference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogueReference($index)
    {
        return isset($this->catalogueReference[$index]);
    }

    /**
     * unset catalogueReference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogueReference($index)
    {
        unset($this->catalogueReference[$index]);
    }

    /**
     * Gets as catalogueReference
     *
     * @return \Calcinai\Siri\Objects\Datex\CatalogueReferenceType[]
     */
    public function getCatalogueReference()
    {
        return $this->catalogueReference;
    }

    /**
     * Sets a new catalogueReference
     *
     * @param \Calcinai\Siri\Objects\Datex\CatalogueReferenceType[] $catalogueReference
     * @return self
     */
    public function setCatalogueReference(array $catalogueReference)
    {
        $this->catalogueReference = $catalogueReference;
        return $this;
    }

    /**
     * Gets as exchangeExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getExchangeExtension()
    {
        return $this->exchangeExtension;
    }

    /**
     * Sets a new exchangeExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $exchangeExtension
     * @return self
     */
    public function setExchangeExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $exchangeExtension)
    {
        $this->exchangeExtension = $exchangeExtension;
        return $this;
    }


}

