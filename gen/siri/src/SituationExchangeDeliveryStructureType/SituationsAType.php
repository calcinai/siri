<?php

namespace Calcinai\Siri\SituationExchangeDeliveryStructureType;

/**
 * Class representing SituationsAType
 */
class SituationsAType
{

    /**
     * Description of an situation.
     *
     * @property \Calcinai\Siri\PtSituationElementStructureType[] $ptSituationElement
     */
    private $ptSituationElement = [
        
    ];

    /**
     * @property \Calcinai\Siri\RoadSituationElement[] $roadSituationElement
     */
    private $roadSituationElement = [
        
    ];

    /**
     * Adds as ptSituationElement
     *
     * Description of an situation.
     *
     * @return self
     * @param \Calcinai\Siri\PtSituationElementStructureType $ptSituationElement
     */
    public function addToPtSituationElement(\Calcinai\Siri\PtSituationElementStructureType $ptSituationElement)
    {
        $this->ptSituationElement[] = $ptSituationElement;
        return $this;
    }

    /**
     * isset ptSituationElement
     *
     * Description of an situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPtSituationElement($index)
    {
        return isset($this->ptSituationElement[$index]);
    }

    /**
     * unset ptSituationElement
     *
     * Description of an situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPtSituationElement($index)
    {
        unset($this->ptSituationElement[$index]);
    }

    /**
     * Gets as ptSituationElement
     *
     * Description of an situation.
     *
     * @return \Calcinai\Siri\PtSituationElementStructureType[]
     */
    public function getPtSituationElement()
    {
        return $this->ptSituationElement;
    }

    /**
     * Sets a new ptSituationElement
     *
     * Description of an situation.
     *
     * @param \Calcinai\Siri\PtSituationElementStructureType[] $ptSituationElement
     * @return self
     */
    public function setPtSituationElement(array $ptSituationElement)
    {
        $this->ptSituationElement = $ptSituationElement;
        return $this;
    }

    /**
     * Adds as roadSituationElement
     *
     * @return self
     * @param \Calcinai\Siri\RoadSituationElement $roadSituationElement
     */
    public function addToRoadSituationElement(\Calcinai\Siri\RoadSituationElement $roadSituationElement)
    {
        $this->roadSituationElement[] = $roadSituationElement;
        return $this;
    }

    /**
     * isset roadSituationElement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoadSituationElement($index)
    {
        return isset($this->roadSituationElement[$index]);
    }

    /**
     * unset roadSituationElement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoadSituationElement($index)
    {
        unset($this->roadSituationElement[$index]);
    }

    /**
     * Gets as roadSituationElement
     *
     * @return \Calcinai\Siri\RoadSituationElement[]
     */
    public function getRoadSituationElement()
    {
        return $this->roadSituationElement;
    }

    /**
     * Sets a new roadSituationElement
     *
     * @param \Calcinai\Siri\RoadSituationElement[] $roadSituationElement
     * @return self
     */
    public function setRoadSituationElement(array $roadSituationElement)
    {
        $this->roadSituationElement = $roadSituationElement;
        return $this;
    }


}

