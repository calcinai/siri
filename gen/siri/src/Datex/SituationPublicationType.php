<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing SituationPublicationType
 *
 * A publication containing zero or more traffic/travel situations.
 * XSD Type: SituationPublication
 */
class SituationPublicationType extends PayloadPublicationType
{

    /**
     * @property \Calcinai\Siri\Objects\Datex\SituationType[] $situation
     */
    private $situation = [
        
    ];

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $situationPublicationExtension
     */
    private $situationPublicationExtension = null;

    /**
     * Adds as situation
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\SituationType $situation
     */
    public function addToSituation(\Calcinai\Siri\Objects\Datex\SituationType $situation)
    {
        $this->situation[] = $situation;
        return $this;
    }

    /**
     * isset situation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSituation($index)
    {
        return isset($this->situation[$index]);
    }

    /**
     * unset situation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSituation($index)
    {
        unset($this->situation[$index]);
    }

    /**
     * Gets as situation
     *
     * @return \Calcinai\Siri\Objects\Datex\SituationType[]
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Sets a new situation
     *
     * @param \Calcinai\Siri\Objects\Datex\SituationType[] $situation
     * @return self
     */
    public function setSituation(array $situation)
    {
        $this->situation = $situation;
        return $this;
    }

    /**
     * Gets as situationPublicationExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getSituationPublicationExtension()
    {
        return $this->situationPublicationExtension;
    }

    /**
     * Sets a new situationPublicationExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $situationPublicationExtension
     * @return self
     */
    public function setSituationPublicationExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $situationPublicationExtension)
    {
        $this->situationPublicationExtension = $situationPublicationExtension;
        return $this;
    }


}

