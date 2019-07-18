<?php

namespace Calcinai\Siri;

/**
 * Class representing AffectedStopPlaceComponentStructureType
 *
 * Type for information about the quays affected by an Situation
 * XSD Type: AffectedStopPlaceComponentStructure
 */
class AffectedStopPlaceComponentStructureType extends AffectedStopPlaceElementStructureType
{

    /**
     * Reference to a Stop Place
     *
     * @property string $componentRef
     */
    private $componentRef = null;

    /**
     * Name of component.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $componentName
     */
    private $componentName = null;

    /**
     * Type of Component
     *
     * @property string $componentType
     */
    private $componentType = null;

    /**
     * @property \Calcinai\Siri\IFOpt\PointProjection $pointProjection
     */
    private $pointProjection = null;

    /**
     * @property \Calcinai\Siri\IFOpt\LinkProjection $linkProjection
     */
    private $linkProjection = null;

    /**
     * @property \Calcinai\Siri\IFOpt\ZoneProjection $zoneProjection
     */
    private $zoneProjection = null;

    /**
     * Further qualifcation of affected part of Link projection,
     *
     * @property \Calcinai\Siri\OffsetStructureType $offset
     */
    private $offset = null;

    /**
     * @property \Calcinai\Siri\Extensions $extensions
     */
    private $extensions = null;

    /**
     * Gets as componentRef
     *
     * Reference to a Stop Place
     *
     * @return string
     */
    public function getComponentRef()
    {
        return $this->componentRef;
    }

    /**
     * Sets a new componentRef
     *
     * Reference to a Stop Place
     *
     * @param string $componentRef
     * @return self
     */
    public function setComponentRef($componentRef)
    {
        $this->componentRef = $componentRef;
        return $this;
    }

    /**
     * Gets as componentName
     *
     * Name of component.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getComponentName()
    {
        return $this->componentName;
    }

    /**
     * Sets a new componentName
     *
     * Name of component.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $componentName
     * @return self
     */
    public function setComponentName(\Calcinai\Siri\NaturalLanguageStringStructureType $componentName)
    {
        $this->componentName = $componentName;
        return $this;
    }

    /**
     * Gets as componentType
     *
     * Type of Component
     *
     * @return string
     */
    public function getComponentType()
    {
        return $this->componentType;
    }

    /**
     * Sets a new componentType
     *
     * Type of Component
     *
     * @param string $componentType
     * @return self
     */
    public function setComponentType($componentType)
    {
        $this->componentType = $componentType;
        return $this;
    }

    /**
     * Gets as pointProjection
     *
     * @return \Calcinai\Siri\IFOpt\PointProjection
     */
    public function getPointProjection()
    {
        return $this->pointProjection;
    }

    /**
     * Sets a new pointProjection
     *
     * @param \Calcinai\Siri\IFOpt\PointProjection $pointProjection
     * @return self
     */
    public function setPointProjection(\Calcinai\Siri\IFOpt\PointProjection $pointProjection)
    {
        $this->pointProjection = $pointProjection;
        return $this;
    }

    /**
     * Gets as linkProjection
     *
     * @return \Calcinai\Siri\IFOpt\LinkProjection
     */
    public function getLinkProjection()
    {
        return $this->linkProjection;
    }

    /**
     * Sets a new linkProjection
     *
     * @param \Calcinai\Siri\IFOpt\LinkProjection $linkProjection
     * @return self
     */
    public function setLinkProjection(\Calcinai\Siri\IFOpt\LinkProjection $linkProjection)
    {
        $this->linkProjection = $linkProjection;
        return $this;
    }

    /**
     * Gets as zoneProjection
     *
     * @return \Calcinai\Siri\IFOpt\ZoneProjection
     */
    public function getZoneProjection()
    {
        return $this->zoneProjection;
    }

    /**
     * Sets a new zoneProjection
     *
     * @param \Calcinai\Siri\IFOpt\ZoneProjection $zoneProjection
     * @return self
     */
    public function setZoneProjection(\Calcinai\Siri\IFOpt\ZoneProjection $zoneProjection)
    {
        $this->zoneProjection = $zoneProjection;
        return $this;
    }

    /**
     * Gets as offset
     *
     * Further qualifcation of affected part of Link projection,
     *
     * @return \Calcinai\Siri\OffsetStructureType
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Sets a new offset
     *
     * Further qualifcation of affected part of Link projection,
     *
     * @param \Calcinai\Siri\OffsetStructureType $offset
     * @return self
     */
    public function setOffset(\Calcinai\Siri\OffsetStructureType $offset)
    {
        $this->offset = $offset;
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

