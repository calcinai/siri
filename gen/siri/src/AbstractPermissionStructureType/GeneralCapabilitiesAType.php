<?php

namespace Calcinai\Siri\AbstractPermissionStructureType;

/**
 * Class representing GeneralCapabilitiesAType
 */
class GeneralCapabilitiesAType
{

    /**
     * Participant may make direct requests for data. Default is true.
     *
     * @property bool $requestResponse
     */
    private $requestResponse = null;

    /**
     * Participant may create subscriptions. Default True.
     *
     * @property bool $publishSubscribe
     */
    private $publishSubscribe = null;

    /**
     * Gets as requestResponse
     *
     * Participant may make direct requests for data. Default is true.
     *
     * @return bool
     */
    public function getRequestResponse()
    {
        return $this->requestResponse;
    }

    /**
     * Sets a new requestResponse
     *
     * Participant may make direct requests for data. Default is true.
     *
     * @param bool $requestResponse
     * @return self
     */
    public function setRequestResponse($requestResponse)
    {
        $this->requestResponse = $requestResponse;
        return $this;
    }

    /**
     * Gets as publishSubscribe
     *
     * Participant may create subscriptions. Default True.
     *
     * @return bool
     */
    public function getPublishSubscribe()
    {
        return $this->publishSubscribe;
    }

    /**
     * Sets a new publishSubscribe
     *
     * Participant may create subscriptions. Default True.
     *
     * @param bool $publishSubscribe
     * @return self
     */
    public function setPublishSubscribe($publishSubscribe)
    {
        $this->publishSubscribe = $publishSubscribe;
        return $this;
    }


}

