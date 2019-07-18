<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing SituationElementStructureType
 *
 * Type for loggable Entry.
 * XSD Type: SituationElementStructure
 */
class SituationElementStructureType extends AbstractSituationElementStructureType
{

    /**
     * Associations with other Situations.
     *
     * @property \Calcinai\Siri\Objects\RelatedSituationStructureType[] $references
     */
    private $references = null;

    /**
     * Information about source of information, that is, where the agent using the capture client obtained an item of information, or in the case of an automated feed, an identifier of the specific feed. Can be used to obtain updates, verify details or otherwise assess relevance.
     *
     * @property \Calcinai\Siri\Objects\SituationSourceStructureType $source
     */
    private $source = null;

    /**
     * Time at which Situation element was versioned. Once versioned, no furtr changes can be made
     *
     * @property \DateTime $versionedAtTime
     */
    private $versionedAtTime = null;

    /**
     * Adds as relatedToRef
     *
     * Associations with other Situations.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\RelatedSituationStructureType $relatedToRef
     */
    public function addToReferences(\Calcinai\Siri\Objects\RelatedSituationStructureType $relatedToRef)
    {
        $this->references[] = $relatedToRef;
        return $this;
    }

    /**
     * isset references
     *
     * Associations with other Situations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferences($index)
    {
        return isset($this->references[$index]);
    }

    /**
     * unset references
     *
     * Associations with other Situations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferences($index)
    {
        unset($this->references[$index]);
    }

    /**
     * Gets as references
     *
     * Associations with other Situations.
     *
     * @return \Calcinai\Siri\Objects\RelatedSituationStructureType[]
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * Sets a new references
     *
     * Associations with other Situations.
     *
     * @param \Calcinai\Siri\Objects\RelatedSituationStructureType[] $references
     * @return self
     */
    public function setReferences(array $references)
    {
        $this->references = $references;
        return $this;
    }

    /**
     * Gets as source
     *
     * Information about source of information, that is, where the agent using the capture client obtained an item of information, or in the case of an automated feed, an identifier of the specific feed. Can be used to obtain updates, verify details or otherwise assess relevance.
     *
     * @return \Calcinai\Siri\Objects\SituationSourceStructureType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Information about source of information, that is, where the agent using the capture client obtained an item of information, or in the case of an automated feed, an identifier of the specific feed. Can be used to obtain updates, verify details or otherwise assess relevance.
     *
     * @param \Calcinai\Siri\Objects\SituationSourceStructureType $source
     * @return self
     */
    public function setSource(\Calcinai\Siri\Objects\SituationSourceStructureType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as versionedAtTime
     *
     * Time at which Situation element was versioned. Once versioned, no furtr changes can be made
     *
     * @return \DateTime
     */
    public function getVersionedAtTime()
    {
        return $this->versionedAtTime;
    }

    /**
     * Sets a new versionedAtTime
     *
     * Time at which Situation element was versioned. Once versioned, no furtr changes can be made
     *
     * @param \DateTime $versionedAtTime
     * @return self
     */
    public function setVersionedAtTime(\DateTime $versionedAtTime)
    {
        $this->versionedAtTime = $versionedAtTime;
        return $this;
    }


}

