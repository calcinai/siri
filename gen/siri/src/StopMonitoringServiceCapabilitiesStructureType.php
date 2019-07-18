<?php

namespace Calcinai\Siri;

/**
 * Class representing StopMonitoringServiceCapabilitiesStructureType
 *
 * Type for Stop Monitoring Capabilities.
 * XSD Type: StopMonitoringServiceCapabilitiesStructure
 */
class StopMonitoringServiceCapabilitiesStructureType extends AbstractCapabilitiesStructureType
{

    /**
     * Available Filtering Capabilities.
     *
     * @property \Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     */
    private $topicFiltering = null;

    /**
     * Available Request Policy capabilities.
     *
     * @property \Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy
     */
    private $requestPolicy = null;

    /**
     * Available Subscription Policy capabilities.
     *
     * @property \Calcinai\Siri\CapabilitySubscriptionPolicyStructureType $subscriptionPolicy
     */
    private $subscriptionPolicy = null;

    /**
     * Available Optional Access control capabilities
     *
     * @property \Calcinai\Siri\MonitoringCapabilityAccessControlStructureType $accessControl
     */
    private $accessControl = null;

    /**
     * Available Optional Response capabilities
     *
     * @property \Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType $responseFeatures
     */
    private $responseFeatures = null;

    /**
     * Gets as topicFiltering
     *
     * Available Filtering Capabilities.
     *
     * @return \Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\TopicFilteringAType
     */
    public function getTopicFiltering()
    {
        return $this->topicFiltering;
    }

    /**
     * Sets a new topicFiltering
     *
     * Available Filtering Capabilities.
     *
     * @param \Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     * @return self
     */
    public function setTopicFiltering(\Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering)
    {
        $this->topicFiltering = $topicFiltering;
        return $this;
    }

    /**
     * Gets as requestPolicy
     *
     * Available Request Policy capabilities.
     *
     * @return \Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\RequestPolicyAType
     */
    public function getRequestPolicy()
    {
        return $this->requestPolicy;
    }

    /**
     * Sets a new requestPolicy
     *
     * Available Request Policy capabilities.
     *
     * @param \Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy
     * @return self
     */
    public function setRequestPolicy(\Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy)
    {
        $this->requestPolicy = $requestPolicy;
        return $this;
    }

    /**
     * Gets as subscriptionPolicy
     *
     * Available Subscription Policy capabilities.
     *
     * @return \Calcinai\Siri\CapabilitySubscriptionPolicyStructureType
     */
    public function getSubscriptionPolicy()
    {
        return $this->subscriptionPolicy;
    }

    /**
     * Sets a new subscriptionPolicy
     *
     * Available Subscription Policy capabilities.
     *
     * @param \Calcinai\Siri\CapabilitySubscriptionPolicyStructureType $subscriptionPolicy
     * @return self
     */
    public function setSubscriptionPolicy(\Calcinai\Siri\CapabilitySubscriptionPolicyStructureType $subscriptionPolicy)
    {
        $this->subscriptionPolicy = $subscriptionPolicy;
        return $this;
    }

    /**
     * Gets as accessControl
     *
     * Available Optional Access control capabilities
     *
     * @return \Calcinai\Siri\MonitoringCapabilityAccessControlStructureType
     */
    public function getAccessControl()
    {
        return $this->accessControl;
    }

    /**
     * Sets a new accessControl
     *
     * Available Optional Access control capabilities
     *
     * @param \Calcinai\Siri\MonitoringCapabilityAccessControlStructureType $accessControl
     * @return self
     */
    public function setAccessControl(\Calcinai\Siri\MonitoringCapabilityAccessControlStructureType $accessControl)
    {
        $this->accessControl = $accessControl;
        return $this;
    }

    /**
     * Gets as responseFeatures
     *
     * Available Optional Response capabilities
     *
     * @return \Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType
     */
    public function getResponseFeatures()
    {
        return $this->responseFeatures;
    }

    /**
     * Sets a new responseFeatures
     *
     * Available Optional Response capabilities
     *
     * @param \Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType $responseFeatures
     * @return self
     */
    public function setResponseFeatures(\Calcinai\Siri\StopMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType $responseFeatures)
    {
        $this->responseFeatures = $responseFeatures;
        return $this;
    }


}

