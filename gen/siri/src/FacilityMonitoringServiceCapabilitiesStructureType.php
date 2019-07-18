<?php

namespace Calcinai\Siri;

/**
 * Class representing FacilityMonitoringServiceCapabilitiesStructureType
 *
 * Type for Vehicle Monitoring Capabilities
 * XSD Type: FacilityMonitoringServiceCapabilitiesStructure
 */
class FacilityMonitoringServiceCapabilitiesStructureType extends AbstractCapabilitiesStructureType
{

    /**
     * Filtering Capabilities.
     *
     * @property \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     */
    private $topicFiltering = null;

    /**
     * Request Policiy capabilities.
     *
     * @property \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy
     */
    private $requestPolicy = null;

    /**
     * Subscription Policy capabilities.
     *
     * @property \Calcinai\Siri\CapabilitySubscriptionPolicyStructureType $subscriptionPolicy
     */
    private $subscriptionPolicy = null;

    /**
     * Optional Access control capabilities.
     *
     * @property \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\AccessControlAType $accessControl
     */
    private $accessControl = null;

    /**
     * Optional Response capabilities
     *
     * @property \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType $responseFeatures
     */
    private $responseFeatures = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as topicFiltering
     *
     * Filtering Capabilities.
     *
     * @return \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\TopicFilteringAType
     */
    public function getTopicFiltering()
    {
        return $this->topicFiltering;
    }

    /**
     * Sets a new topicFiltering
     *
     * Filtering Capabilities.
     *
     * @param \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     * @return self
     */
    public function setTopicFiltering(\Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering)
    {
        $this->topicFiltering = $topicFiltering;
        return $this;
    }

    /**
     * Gets as requestPolicy
     *
     * Request Policiy capabilities.
     *
     * @return \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\RequestPolicyAType
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
     * @param \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy
     * @return self
     */
    public function setRequestPolicy(\Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy)
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
     * Optional Access control capabilities.
     *
     * @return \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\AccessControlAType
     */
    public function getAccessControl()
    {
        return $this->accessControl;
    }

    /**
     * Sets a new accessControl
     *
     * Optional Access control capabilities.
     *
     * @param \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\AccessControlAType $accessControl
     * @return self
     */
    public function setAccessControl(\Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\AccessControlAType $accessControl)
    {
        $this->accessControl = $accessControl;
        return $this;
    }

    /**
     * Gets as responseFeatures
     *
     * Optional Response capabilities
     *
     * @return \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType
     */
    public function getResponseFeatures()
    {
        return $this->responseFeatures;
    }

    /**
     * Sets a new responseFeatures
     *
     * Optional Response capabilities
     *
     * @param \Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType $responseFeatures
     * @return self
     */
    public function setResponseFeatures(\Calcinai\Siri\FacilityMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType $responseFeatures)
    {
        $this->responseFeatures = $responseFeatures;
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

