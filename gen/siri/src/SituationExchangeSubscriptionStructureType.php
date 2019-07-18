<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing SituationExchangeSubscriptionStructureType
 *
 * Data type for Subscription Request forSituation Exchange Service.
 * XSD Type: SituationExchangeSubscriptionStructure
 */
class SituationExchangeSubscriptionStructureType extends AbstractSubscriptionStructureType
{

    /**
     * @property \Calcinai\Siri\Objects\SituationExchangeRequest $situationExchangeRequest
     */
    private $situationExchangeRequest = null;

    /**
     * Whether the producer will return the complete set of current data, or only only provide updates to this data, i.e. additions, modifications and deletions.
     * If false or omitted, each subscription response will contain the full information as specified in this request.
     *
     * @property bool $incrementalUpdates
     */
    private $incrementalUpdates = null;

    /**
     * Gets as situationExchangeRequest
     *
     * @return \Calcinai\Siri\Objects\SituationExchangeRequest
     */
    public function getSituationExchangeRequest()
    {
        return $this->situationExchangeRequest;
    }

    /**
     * Sets a new situationExchangeRequest
     *
     * @param \Calcinai\Siri\Objects\SituationExchangeRequest $situationExchangeRequest
     * @return self
     */
    public function setSituationExchangeRequest(\Calcinai\Siri\Objects\SituationExchangeRequest $situationExchangeRequest)
    {
        $this->situationExchangeRequest = $situationExchangeRequest;
        return $this;
    }

    /**
     * Gets as incrementalUpdates
     *
     * Whether the producer will return the complete set of current data, or only only provide updates to this data, i.e. additions, modifications and deletions.
     * If false or omitted, each subscription response will contain the full information as specified in this request.
     *
     * @return bool
     */
    public function getIncrementalUpdates()
    {
        return $this->incrementalUpdates;
    }

    /**
     * Sets a new incrementalUpdates
     *
     * Whether the producer will return the complete set of current data, or only only provide updates to this data, i.e. additions, modifications and deletions.
     * If false or omitted, each subscription response will contain the full information as specified in this request.
     *
     * @param bool $incrementalUpdates
     * @return self
     */
    public function setIncrementalUpdates($incrementalUpdates)
    {
        $this->incrementalUpdates = $incrementalUpdates;
        return $this;
    }


}

