<?php

namespace Calcinai\Siri;

/**
 * Class representing StopTimetableServiceCapabilitiesStructureType
 *
 * Type for Capabilities of Stop Timetable Service.
 * XSD Type: StopTimetableServiceCapabilitiesStructure
 */
class StopTimetableServiceCapabilitiesStructureType extends AbstractCapabilitiesStructureType
{

    /**
     * Available Filtering Capabilities
     *
     * @property \Calcinai\Siri\StopTimetableServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     */
    private $topicFiltering = null;

    /**
     * Available request policy options.
     *
     * @property \Calcinai\Siri\StopMonitoringCapabilityRequestPolicyStructureType $requestPolicy
     */
    private $requestPolicy = null;

    /**
     * Access control that can be used.
     *
     * @property \Calcinai\Siri\StopTimetableServiceCapabilitiesStructureType\AccessControlAType $accessControl
     */
    private $accessControl = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as topicFiltering
     *
     * Available Filtering Capabilities
     *
     * @return \Calcinai\Siri\StopTimetableServiceCapabilitiesStructureType\TopicFilteringAType
     */
    public function getTopicFiltering()
    {
        return $this->topicFiltering;
    }

    /**
     * Sets a new topicFiltering
     *
     * Available Filtering Capabilities
     *
     * @param \Calcinai\Siri\StopTimetableServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering
     * @return self
     */
    public function setTopicFiltering(\Calcinai\Siri\StopTimetableServiceCapabilitiesStructureType\TopicFilteringAType $topicFiltering)
    {
        $this->topicFiltering = $topicFiltering;
        return $this;
    }

    /**
     * Gets as requestPolicy
     *
     * Available request policy options.
     *
     * @return \Calcinai\Siri\StopMonitoringCapabilityRequestPolicyStructureType
     */
    public function getRequestPolicy()
    {
        return $this->requestPolicy;
    }

    /**
     * Sets a new requestPolicy
     *
     * Available request policy options.
     *
     * @param \Calcinai\Siri\StopMonitoringCapabilityRequestPolicyStructureType $requestPolicy
     * @return self
     */
    public function setRequestPolicy(\Calcinai\Siri\StopMonitoringCapabilityRequestPolicyStructureType $requestPolicy)
    {
        $this->requestPolicy = $requestPolicy;
        return $this;
    }

    /**
     * Gets as accessControl
     *
     * Access control that can be used.
     *
     * @return \Calcinai\Siri\StopTimetableServiceCapabilitiesStructureType\AccessControlAType
     */
    public function getAccessControl()
    {
        return $this->accessControl;
    }

    /**
     * Sets a new accessControl
     *
     * Access control that can be used.
     *
     * @param \Calcinai\Siri\StopTimetableServiceCapabilitiesStructureType\AccessControlAType $accessControl
     * @return self
     */
    public function setAccessControl(\Calcinai\Siri\StopTimetableServiceCapabilitiesStructureType\AccessControlAType $accessControl)
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

