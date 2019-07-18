<?php

namespace Calcinai\Siri\Objects;

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
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $componentName
     */
    private $componentName = null;

    /**
     * Type of Component
     *
     * @property string $componentType
     */
    private $componentType = null;

    /**
     * @property \Calcinai\Siri\Objects\IFOpt\PointProjection $pointProjection
     */
    private $pointProjection = null;

    /**
     * @property \Calcinai\Siri\Objects\IFOpt\LinkProjection $linkProjection
     */
    private $linkProjection = null;

    /**
     * @property \Calcinai\Siri\Objects\IFOpt\ZoneProjection $zoneProjection
     */
    private $zoneProjection = null;

    /**
     * Further qualifcation of affected part of Link projection,
     *
     * @property \Calcinai\Siri\Objects\OffsetStructureType $offset
     */
    private $offset = null;

    /**
     * @property \Calcinai\Siri\Objects\Extensions $extensions
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
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
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
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $componentName
     * @return self
     */
    public function setComponentName(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $componentName)
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
     * @return \Calcinai\Siri\Objects\IFOpt\PointProjection
     */
    public function getPointProjection()
    {
        return $this->pointProjection;
    }

    /**
     * Sets a new pointProjection
     *
     * @param \Calcinai\Siri\Objects\IFOpt\PointProjection $pointProjection
     * @return self
     */
    public function setPointProjection(\Calcinai\Siri\Objects\IFOpt\PointProjection $pointProjection)
    {
        $this->pointProjection = $pointProjection;
        return $this;
    }

    /**
     * Gets as linkProjection
     *
     * @return \Calcinai\Siri\Objects\IFOpt\LinkProjection
     */
    public function getLinkProjection()
    {
        return $this->linkProjection;
    }

    /**
     * Sets a new linkProjection
     *
     * @param \Calcinai\Siri\Objects\IFOpt\LinkProjection $linkProjection
     * @return self
     */
    public function setLinkProjection(\Calcinai\Siri\Objects\IFOpt\LinkProjection $linkProjection)
    {
        $this->linkProjection = $linkProjection;
        return $this;
    }

    /**
     * Gets as zoneProjection
     *
     * @return \Calcinai\Siri\Objects\IFOpt\ZoneProjection
     */
    public function getZoneProjection()
    {
        return $this->zoneProjection;
    }

    /**
     * Sets a new zoneProjection
     *
     * @param \Calcinai\Siri\Objects\IFOpt\ZoneProjection $zoneProjection
     * @return self
     */
    public function setZoneProjection(\Calcinai\Siri\Objects\IFOpt\ZoneProjection $zoneProjection)
    {
        $this->zoneProjection = $zoneProjection;
        return $this;
    }

    /**
     * Gets as offset
     *
     * Further qualifcation of affected part of Link projection,
     *
     * @return \Calcinai\Siri\Objects\OffsetStructureType
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
     * @param \Calcinai\Siri\Objects\OffsetStructureType $offset
     * @return self
     */
    public function setOffset(\Calcinai\Siri\Objects\OffsetStructureType $offset)
    {
        $this->offset = $offset;
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

