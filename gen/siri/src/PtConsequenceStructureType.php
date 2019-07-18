<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing PtConsequenceStructureType
 *
 * Type for disruption.
 * XSD Type: PtConsequenceStructure
 */
class PtConsequenceStructureType
{

    /**
     * Period of effect of disruption, if different from that of situation.
     *
     * @property \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType $period
     */
    private $period = null;

    /**
     * @property string $condition
     */
    private $condition = null;

    /**
     * Severity of disruption if different from that of situation. TPEG pti26
     *
     * @property string $severity
     */
    private $severity = null;

    /**
     * Parts of transport network affected by disruption if different from that of situation.
     *
     * @property \Calcinai\Siri\Objects\AffectsScopeStructureType $affects
     */
    private $affects = null;

    /**
     * Effect on different passenger needs
     *
     * @property \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[] $suitabilities
     */
    private $suitabilities = null;

    /**
     * Advice to passengers.
     *
     * @property \Calcinai\Siri\Objects\PtAdviceStructureType $advice
     */
    private $advice = null;

    /**
     * How Disruption should be handled in Info systems
     *
     * @property \Calcinai\Siri\Objects\BlockingStructureType $blocking
     */
    private $blocking = null;

    /**
     * Change to normal boarding activity allowed at stop.
     *
     * @property \Calcinai\Siri\Objects\BoardingStructureType $boarding
     */
    private $boarding = null;

    /**
     * @property \Calcinai\Siri\Objects\DelaysStructureType $delays
     */
    private $delays = null;

    /**
     * Information on casualties
     *
     * @property \Calcinai\Siri\Objects\CasualtiesStructureType $casualties
     */
    private $casualties = null;

    /**
     * Description of fare exceptions allowed because of disruption.
     *
     * @property \Calcinai\Siri\Objects\EasementsStructureType[] $easements
     */
    private $easements = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as period
     *
     * Period of effect of disruption, if different from that of situation.
     *
     * @return \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Period of effect of disruption, if different from that of situation.
     *
     * @param \Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType $period
     * @return self
     */
    public function setPeriod(\Calcinai\Siri\Objects\HalfOpenTimestampRangeStructureType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param string $condition
     * @return self
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as severity
     *
     * Severity of disruption if different from that of situation. TPEG pti26
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * Severity of disruption if different from that of situation. TPEG pti26
     *
     * @param string $severity
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as affects
     *
     * Parts of transport network affected by disruption if different from that of situation.
     *
     * @return \Calcinai\Siri\Objects\AffectsScopeStructureType
     */
    public function getAffects()
    {
        return $this->affects;
    }

    /**
     * Sets a new affects
     *
     * Parts of transport network affected by disruption if different from that of situation.
     *
     * @param \Calcinai\Siri\Objects\AffectsScopeStructureType $affects
     * @return self
     */
    public function setAffects(\Calcinai\Siri\Objects\AffectsScopeStructureType $affects)
    {
        $this->affects = $affects;
        return $this;
    }

    /**
     * Adds as suitability
     *
     * Effect on different passenger needs
     *
     * @return self
     * @param \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType $suitability
     */
    public function addToSuitabilities(\Calcinai\Siri\Objects\ACSB\SuitabilityStructureType $suitability)
    {
        $this->suitabilities[] = $suitability;
        return $this;
    }

    /**
     * isset suitabilities
     *
     * Effect on different passenger needs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuitabilities($index)
    {
        return isset($this->suitabilities[$index]);
    }

    /**
     * unset suitabilities
     *
     * Effect on different passenger needs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuitabilities($index)
    {
        unset($this->suitabilities[$index]);
    }

    /**
     * Gets as suitabilities
     *
     * Effect on different passenger needs
     *
     * @return \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[]
     */
    public function getSuitabilities()
    {
        return $this->suitabilities;
    }

    /**
     * Sets a new suitabilities
     *
     * Effect on different passenger needs
     *
     * @param \Calcinai\Siri\Objects\ACSB\SuitabilityStructureType[] $suitabilities
     * @return self
     */
    public function setSuitabilities(array $suitabilities)
    {
        $this->suitabilities = $suitabilities;
        return $this;
    }

    /**
     * Gets as advice
     *
     * Advice to passengers.
     *
     * @return \Calcinai\Siri\Objects\PtAdviceStructureType
     */
    public function getAdvice()
    {
        return $this->advice;
    }

    /**
     * Sets a new advice
     *
     * Advice to passengers.
     *
     * @param \Calcinai\Siri\Objects\PtAdviceStructureType $advice
     * @return self
     */
    public function setAdvice(\Calcinai\Siri\Objects\PtAdviceStructureType $advice)
    {
        $this->advice = $advice;
        return $this;
    }

    /**
     * Gets as blocking
     *
     * How Disruption should be handled in Info systems
     *
     * @return \Calcinai\Siri\Objects\BlockingStructureType
     */
    public function getBlocking()
    {
        return $this->blocking;
    }

    /**
     * Sets a new blocking
     *
     * How Disruption should be handled in Info systems
     *
     * @param \Calcinai\Siri\Objects\BlockingStructureType $blocking
     * @return self
     */
    public function setBlocking(\Calcinai\Siri\Objects\BlockingStructureType $blocking)
    {
        $this->blocking = $blocking;
        return $this;
    }

    /**
     * Gets as boarding
     *
     * Change to normal boarding activity allowed at stop.
     *
     * @return \Calcinai\Siri\Objects\BoardingStructureType
     */
    public function getBoarding()
    {
        return $this->boarding;
    }

    /**
     * Sets a new boarding
     *
     * Change to normal boarding activity allowed at stop.
     *
     * @param \Calcinai\Siri\Objects\BoardingStructureType $boarding
     * @return self
     */
    public function setBoarding(\Calcinai\Siri\Objects\BoardingStructureType $boarding)
    {
        $this->boarding = $boarding;
        return $this;
    }

    /**
     * Gets as delays
     *
     * @return \Calcinai\Siri\Objects\DelaysStructureType
     */
    public function getDelays()
    {
        return $this->delays;
    }

    /**
     * Sets a new delays
     *
     * @param \Calcinai\Siri\Objects\DelaysStructureType $delays
     * @return self
     */
    public function setDelays(\Calcinai\Siri\Objects\DelaysStructureType $delays)
    {
        $this->delays = $delays;
        return $this;
    }

    /**
     * Gets as casualties
     *
     * Information on casualties
     *
     * @return \Calcinai\Siri\Objects\CasualtiesStructureType
     */
    public function getCasualties()
    {
        return $this->casualties;
    }

    /**
     * Sets a new casualties
     *
     * Information on casualties
     *
     * @param \Calcinai\Siri\Objects\CasualtiesStructureType $casualties
     * @return self
     */
    public function setCasualties(\Calcinai\Siri\Objects\CasualtiesStructureType $casualties)
    {
        $this->casualties = $casualties;
        return $this;
    }

    /**
     * Adds as easements
     *
     * Description of fare exceptions allowed because of disruption.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\EasementsStructureType $easements
     */
    public function addToEasements(\Calcinai\Siri\Objects\EasementsStructureType $easements)
    {
        $this->easements[] = $easements;
        return $this;
    }

    /**
     * isset easements
     *
     * Description of fare exceptions allowed because of disruption.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEasements($index)
    {
        return isset($this->easements[$index]);
    }

    /**
     * unset easements
     *
     * Description of fare exceptions allowed because of disruption.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEasements($index)
    {
        unset($this->easements[$index]);
    }

    /**
     * Gets as easements
     *
     * Description of fare exceptions allowed because of disruption.
     *
     * @return \Calcinai\Siri\Objects\EasementsStructureType[]
     */
    public function getEasements()
    {
        return $this->easements;
    }

    /**
     * Sets a new easements
     *
     * Description of fare exceptions allowed because of disruption.
     *
     * @param \Calcinai\Siri\Objects\EasementsStructureType[] $easements
     * @return self
     */
    public function setEasements(array $easements)
    {
        $this->easements = $easements;
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

