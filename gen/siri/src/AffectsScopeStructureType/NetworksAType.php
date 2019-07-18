<?php

namespace Calcinai\Siri\Objects\AffectsScopeStructureType;

/**
 * Class representing NetworksAType
 */
class NetworksAType
{

    /**
     * Nrtworks and Route(s) affected by situation
     *
     * @property \Calcinai\Siri\Objects\AffectsScopeStructureType\NetworksAType\AffectedNetworkAType[] $affectedNetwork
     */
    private $affectedNetwork = [
        
    ];

    /**
     * Adds as affectedNetwork
     *
     * Nrtworks and Route(s) affected by situation
     *
     * @return self
     * @param \Calcinai\Siri\Objects\AffectsScopeStructureType\NetworksAType\AffectedNetworkAType $affectedNetwork
     */
    public function addToAffectedNetwork(\Calcinai\Siri\Objects\AffectsScopeStructureType\NetworksAType\AffectedNetworkAType $affectedNetwork)
    {
        $this->affectedNetwork[] = $affectedNetwork;
        return $this;
    }

    /**
     * isset affectedNetwork
     *
     * Nrtworks and Route(s) affected by situation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedNetwork($index)
    {
        return isset($this->affectedNetwork[$index]);
    }

    /**
     * unset affectedNetwork
     *
     * Nrtworks and Route(s) affected by situation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedNetwork($index)
    {
        unset($this->affectedNetwork[$index]);
    }

    /**
     * Gets as affectedNetwork
     *
     * Nrtworks and Route(s) affected by situation
     *
     * @return \Calcinai\Siri\Objects\AffectsScopeStructureType\NetworksAType\AffectedNetworkAType[]
     */
    public function getAffectedNetwork()
    {
        return $this->affectedNetwork;
    }

    /**
     * Sets a new affectedNetwork
     *
     * Nrtworks and Route(s) affected by situation
     *
     * @param \Calcinai\Siri\Objects\AffectsScopeStructureType\NetworksAType\AffectedNetworkAType[] $affectedNetwork
     * @return self
     */
    public function setAffectedNetwork(array $affectedNetwork)
    {
        $this->affectedNetwork = $affectedNetwork;
        return $this;
    }


}

