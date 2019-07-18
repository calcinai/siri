<?php

namespace Calcinai\Siri\PtSituationElementStructureType;

/**
 * Class representing SecondaryReasonsAType
 */
class SecondaryReasonsAType
{

    /**
     * Reason
     *
     * @property \Calcinai\Siri\PtSituationElementStructureType\SecondaryReasonsAType\ReasonAType[] $reason
     */
    private $reason = [
        
    ];

    /**
     * Adds as reason
     *
     * Reason
     *
     * @return self
     * @param \Calcinai\Siri\PtSituationElementStructureType\SecondaryReasonsAType\ReasonAType $reason
     */
    public function addToReason(\Calcinai\Siri\PtSituationElementStructureType\SecondaryReasonsAType\ReasonAType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * Reason
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReason($index)
    {
        return isset($this->reason[$index]);
    }

    /**
     * unset reason
     *
     * Reason
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReason($index)
    {
        unset($this->reason[$index]);
    }

    /**
     * Gets as reason
     *
     * Reason
     *
     * @return \Calcinai\Siri\PtSituationElementStructureType\SecondaryReasonsAType\ReasonAType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Reason
     *
     * @param \Calcinai\Siri\PtSituationElementStructureType\SecondaryReasonsAType\ReasonAType[] $reason
     * @return self
     */
    public function setReason(array $reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

