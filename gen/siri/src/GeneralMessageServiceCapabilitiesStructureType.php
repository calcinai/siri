<?php

namespace Calcinai\Siri;

/**
 * Class representing GeneralMessageServiceCapabilitiesStructureType
 *
 * Type for General Message Capabilities
 * XSD Type: GeneralMessageServiceCapabilitiesStructure
 */
class GeneralMessageServiceCapabilitiesStructureType extends AbstractCapabilitiesStructureType
{

    /**
     * Filtering Capabilities.
     *
     * @property \Calcinai\Siri\GeneralMessageServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     */
    private $topicFiltering = null;

    /**
     * Request Policiy capabilities.
     *
     * @property \Calcinai\Siri\CapabilityRequestPolicyStructureType $requestPolicy
     */
    private $requestPolicy = null;

    /**
     * Optional Access control capabilities.
     *
     * @property \Calcinai\Siri\GeneralMessageCapabilityAccessControlStructureType $accessControl
     */
    private $accessControl = null;

    /**
     * Gets as topicFiltering
     *
     * Filtering Capabilities.
     *
     * @return \Calcinai\Siri\GeneralMessageServiceCapabilitiesStructureType\TopicFilteringAType
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
     * @param \Calcinai\Siri\GeneralMessageServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     * @return self
     */
    public function setTopicFiltering(\Calcinai\Siri\GeneralMessageServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering)
    {
        $this->topicFiltering = $topicFiltering;
        return $this;
    }

    /**
     * Gets as requestPolicy
     *
     * Request Policiy capabilities.
     *
     * @return \Calcinai\Siri\CapabilityRequestPolicyStructureType
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
     * @param \Calcinai\Siri\CapabilityRequestPolicyStructureType $requestPolicy
     * @return self
     */
    public function setRequestPolicy(\Calcinai\Siri\CapabilityRequestPolicyStructureType $requestPolicy)
    {
        $this->requestPolicy = $requestPolicy;
        return $this;
    }

    /**
     * Gets as accessControl
     *
     * Optional Access control capabilities.
     *
     * @return \Calcinai\Siri\GeneralMessageCapabilityAccessControlStructureType
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
     * @param \Calcinai\Siri\GeneralMessageCapabilityAccessControlStructureType $accessControl
     * @return self
     */
    public function setAccessControl(\Calcinai\Siri\GeneralMessageCapabilityAccessControlStructureType $accessControl)
    {
        $this->accessControl = $accessControl;
        return $this;
    }


}

