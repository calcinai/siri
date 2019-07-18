<?php

namespace Calcinai\Siri;

/**
 * Class representing AffectedStopPlaceStructureType
 *
 * Type for information about the Stop Places affected by an Situation
 * XSD Type: AffectedStopPlaceStructure
 */
class AffectedStopPlaceStructureType extends AffectedStopPlaceElementStructureType
{

    /**
     * Stop Place affected by Situation.
     *
     * @property string $stopPlaceRef
     */
    private $stopPlaceRef = null;

    /**
     * Name of stop place
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $placeName
     */
    private $placeName = null;

    /**
     * Type of Stop Place
     *
     * @property string $stopPlaceType
     */
    private $stopPlaceType = null;

    /**
     * Quays affected by Situation.
     *
     * @property \Calcinai\Siri\AffectedStopPlaceComponentStructureType[] $affectedComponents
     */
    private $affectedComponents = null;

    /**
     * PathLinks affected by Situation.
     *
     * @property string[] $affectedNavigationPaths
     */
    private $affectedNavigationPaths = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as stopPlaceRef
     *
     * Stop Place affected by Situation.
     *
     * @return string
     */
    public function getStopPlaceRef()
    {
        return $this->stopPlaceRef;
    }

    /**
     * Sets a new stopPlaceRef
     *
     * Stop Place affected by Situation.
     *
     * @param string $stopPlaceRef
     * @return self
     */
    public function setStopPlaceRef($stopPlaceRef)
    {
        $this->stopPlaceRef = $stopPlaceRef;
        return $this;
    }

    /**
     * Gets as placeName
     *
     * Name of stop place
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getPlaceName()
    {
        return $this->placeName;
    }

    /**
     * Sets a new placeName
     *
     * Name of stop place
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $placeName
     * @return self
     */
    public function setPlaceName(\Calcinai\Siri\NaturalLanguageStringStructureType $placeName)
    {
        $this->placeName = $placeName;
        return $this;
    }

    /**
     * Gets as stopPlaceType
     *
     * Type of Stop Place
     *
     * @return string
     */
    public function getStopPlaceType()
    {
        return $this->stopPlaceType;
    }

    /**
     * Sets a new stopPlaceType
     *
     * Type of Stop Place
     *
     * @param string $stopPlaceType
     * @return self
     */
    public function setStopPlaceType($stopPlaceType)
    {
        $this->stopPlaceType = $stopPlaceType;
        return $this;
    }

    /**
     * Adds as affectedComponent
     *
     * Quays affected by Situation.
     *
     * @return self
     * @param \Calcinai\Siri\AffectedStopPlaceComponentStructureType $affectedComponent
     */
    public function addToAffectedComponents(\Calcinai\Siri\AffectedStopPlaceComponentStructureType $affectedComponent)
    {
        $this->affectedComponents[] = $affectedComponent;
        return $this;
    }

    /**
     * isset affectedComponents
     *
     * Quays affected by Situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedComponents($index)
    {
        return isset($this->affectedComponents[$index]);
    }

    /**
     * unset affectedComponents
     *
     * Quays affected by Situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedComponents($index)
    {
        unset($this->affectedComponents[$index]);
    }

    /**
     * Gets as affectedComponents
     *
     * Quays affected by Situation.
     *
     * @return \Calcinai\Siri\AffectedStopPlaceComponentStructureType[]
     */
    public function getAffectedComponents()
    {
        return $this->affectedComponents;
    }

    /**
     * Sets a new affectedComponents
     *
     * Quays affected by Situation.
     *
     * @param \Calcinai\Siri\AffectedStopPlaceComponentStructureType[] $affectedComponents
     * @return self
     */
    public function setAffectedComponents(array $affectedComponents)
    {
        $this->affectedComponents = $affectedComponents;
        return $this;
    }

    /**
     * Adds as navigationPathRef
     *
     * PathLinks affected by Situation.
     *
     * @return self
     * @param string $navigationPathRef
     */
    public function addToAffectedNavigationPaths($navigationPathRef)
    {
        $this->affectedNavigationPaths[] = $navigationPathRef;
        return $this;
    }

    /**
     * isset affectedNavigationPaths
     *
     * PathLinks affected by Situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedNavigationPaths($index)
    {
        return isset($this->affectedNavigationPaths[$index]);
    }

    /**
     * unset affectedNavigationPaths
     *
     * PathLinks affected by Situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedNavigationPaths($index)
    {
        unset($this->affectedNavigationPaths[$index]);
    }

    /**
     * Gets as affectedNavigationPaths
     *
     * PathLinks affected by Situation.
     *
     * @return string[]
     */
    public function getAffectedNavigationPaths()
    {
        return $this->affectedNavigationPaths;
    }

    /**
     * Sets a new affectedNavigationPaths
     *
     * PathLinks affected by Situation.
     *
     * @param string $affectedNavigationPaths
     * @return self
     */
    public function setAffectedNavigationPaths(array $affectedNavigationPaths)
    {
        $this->affectedNavigationPaths = $affectedNavigationPaths;
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

