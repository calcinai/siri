<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     */
    private $topicFiltering = null;

    /**
     * Request Policiy capabilities.
     *
     * @property \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy
     */
    private $requestPolicy = null;

    /**
     * Subscription Policy capabilities.
     *
     * @property \Calcinai\Siri\Objects\CapabilitySubscriptionPolicyStructureType $subscriptionPolicy
     */
    private $subscriptionPolicy = null;

    /**
     * Optional Access control capabilities.
     *
     * @property \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\AccessControlAType $accessControl
     */
    private $accessControl = null;

    /**
     * Optional Response capabilities
     *
     * @property \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType $responseFeatures
     */
    private $responseFeatures = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as topicFiltering
     *
     * Filtering Capabilities.
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\TopicFilteringAType
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
     * @param \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     * @return self
     */
    public function setTopicFiltering(\Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering)
    {
        $this->topicFiltering = $topicFiltering;
        return $this;
    }

    /**
     * Gets as requestPolicy
     *
     * Request Policiy capabilities.
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\RequestPolicyAType
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
     * @param \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy
     * @return self
     */
    public function setRequestPolicy(\Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\RequestPolicyAType $requestPolicy)
    {
        $this->requestPolicy = $requestPolicy;
        return $this;
    }

    /**
     * Gets as subscriptionPolicy
     *
     * Subscription Policy capabilities.
     *
     * @return \Calcinai\Siri\Objects\CapabilitySubscriptionPolicyStructureType
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
     * @param \Calcinai\Siri\Objects\CapabilitySubscriptionPolicyStructureType $subscriptionPolicy
     * @return self
     */
    public function setSubscriptionPolicy(\Calcinai\Siri\Objects\CapabilitySubscriptionPolicyStructureType $subscriptionPolicy)
    {
        $this->subscriptionPolicy = $subscriptionPolicy;
        return $this;
    }

    /**
     * Gets as accessControl
     *
     * Optional Access control capabilities.
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\AccessControlAType
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
     * @param \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\AccessControlAType $accessControl
     * @return self
     */
    public function setAccessControl(\Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\AccessControlAType $accessControl)
    {
        $this->accessControl = $accessControl;
        return $this;
    }

    /**
     * Gets as responseFeatures
     *
     * Optional Response capabilities
     *
     * @return \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType
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
     * @param \Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType $responseFeatures
     * @return self
     */
    public function setResponseFeatures(\Calcinai\Siri\Objects\FacilityMonitoringServiceCapabilitiesStructureType\ResponseFeaturesAType $responseFeatures)
    {
        $this->responseFeatures = $responseFeatures;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * @return \Calcinai\Siri\Objects\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * @param \Calcinai\Siri\Objects\Extensions $extensions
     * @return self
     */
    public function setExtensions(\Calcinai\Siri\Objects\Extensions $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }


}

