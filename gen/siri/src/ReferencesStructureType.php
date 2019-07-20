<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing ReferencesStructureType
 *
 * Type for references.
 * XSD Type: ReferencesStructure
 */
class ReferencesStructureType
{

    /**
     * A reference to another Situation with an indication of the nature of the association, e.g. a cause, a result, an update. Note that a Entry that is an update, i.e. has the same IdentifierNumber but a later version number as a previous Entry alway has a supercedes relationship and this does not need to be expliciitly coded.
     *
     * @property \Calcinai\Siri\Objects\RelatedSituationStructureType $relatedToRef
     */
    private $relatedToRef = null;

    /**
     * Gets as relatedToRef
     *
     * A reference to another Situation with an indication of the nature of the association, e.g. a cause, a result, an update. Note that a Entry that is an update, i.e. has the same IdentifierNumber but a later version number as a previous Entry alway has a supercedes relationship and this does not need to be expliciitly coded.
     *
     * @return \Calcinai\Siri\Objects\RelatedSituationStructureType
     */
    public function getRelatedToRef()
    {
        return $this->relatedToRef;
    }

    /**
     * Sets a new relatedToRef
     *
     * A reference to another Situation with an indication of the nature of the association, e.g. a cause, a result, an update. Note that a Entry that is an update, i.e. has the same IdentifierNumber but a later version number as a previous Entry alway has a supercedes relationship and this does not need to be expliciitly coded.
     *
     * @param \Calcinai\Siri\Objects\RelatedSituationStructureType $relatedToRef
     * @return self
     */
    public function setRelatedToRef(\Calcinai\Siri\Objects\RelatedSituationStructureType $relatedToRef)
    {
        $this->relatedToRef = $relatedToRef;
        return $this;
    }


}

