<?php

namespace Calcinai\Siri;

/**
 * Class representing ConnectionMonitoringServiceCapabilitiesStructureType
 *
 * Type for Connection Monitoring Capabilities.
 * XSD Type: ConnectionMonitoringServiceCapabilitiesStructure
 */
class ConnectionMonitoringServiceCapabilitiesStructureType extends AbstractCapabilitiesStructureType
{

    /**
     * Filtering Capabilities
     *
     * @property \Calcinai\Siri\ConnectionMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     */
    private $topicFiltering = null;

    /**
     * Request Policiy capabilities.
     *
     * @property \Calcinai\Siri\ConnectionMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy
     */
    private $requestPolicy = null;

    /**
     * Subscription Policy capabilities.
     *
     * @property \Calcinai\Siri\CapabilitySubscriptionPolicyStructureType $subscriptionPolicy
     */
    private $subscriptionPolicy = null;

    /**
     * Optional Access control capabilities
     *
     * @property \Calcinai\Siri\ConnectionCapabilityAccessControlStructureType $accessControl
     */
    private $accessControl = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as topicFiltering
     *
     * Filtering Capabilities
     *
     * @return \Calcinai\Siri\ConnectionMonitoringServiceCapabilitiesStructureType\TopicFilteringAType
     */
    public function getTopicFiltering()
    {
        return $this->topicFiltering;
    }

    /**
     * Sets a new topicFiltering
     *
     * Filtering Capabilities
     *
     * @param \Calcinai\Siri\ConnectionMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     * @return self
     */
    public function setTopicFiltering(\Calcinai\Siri\ConnectionMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering)
    {
        $this->topicFiltering = $topicFiltering;
        return $this;
    }

    /**
     * Gets as requestPolicy
     *
     * Request Policiy capabilities.
     *
     * @return \Calcinai\Siri\ConnectionMonitoringServiceCapabilitiesStructureType\RequestPolicyAType
     */
    public function getRequestPolicy()
    {
        return $this->requestPolicy;
    }

    /**
     * Sets a new requestPolicy
     *
     * Request Policiy capabilities.
     *
     * @param \Calcinai\Siri\ConnectionMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy
     * @return self
     */
    public function setRequestPolicy(\Calcinai\Siri\ConnectionMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy)
    {
        $this->requestPolicy = $requestPolicy;
        return $this;
    }

    /**
     * Gets as subscriptionPolicy
     *
     * Subscription Policy capabilities.
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
     * Subscription Policy capabilities.
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
     * Optional Access control capabilities
     *
     * @return \Calcinai\Siri\ConnectionCapabilityAccessControlStructureType
     */
    public function getAccessControl()
    {
        return $this->accessControl;
    }

    /**
     * Sets a new accessControl
     *
     * Optional Access control capabilities
     *
     * @param \Calcinai\Siri\ConnectionCapabilityAccessControlStructureType $accessControl
     * @return self
     */
    public function setAccessControl(\Calcinai\Siri\ConnectionCapabilityAccessControlStructureType $accessControl)
    {
        $this->accessControl = $accessControl;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

