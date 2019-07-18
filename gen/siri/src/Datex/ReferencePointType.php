<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing ReferencePointType
 *
 * One of a sequence of reference points along a road, normally spaced at regular intervals along each carriageway with a sequence of identification from a known starting point.
 * XSD Type: ReferencePoint
 */
class ReferencePointType
{

    /**
     * Road reference point identifier, unique on the specified road.
     *
     * @property string $referencePointIdentifier
     */
    private $referencePointIdentifier = null;

    /**
     * Identification of the road administration area which contains the reference point.
     *
     * @property \Calcinai\Siri\Objects\Datex\ReferencePointType\AdministrativeAreaAType\ValueAType[] $administrativeArea
     */
    private $administrativeArea = null;

    /**
     * Name of the road on which the reference point is located.
     *
     * @property \Calcinai\Siri\Objects\Datex\ReferencePointType\RoadNameAType\ValueAType[] $roadName
     */
    private $roadName = null;

    /**
     * Identifier/number of the road on which the reference point is located.
     *
     * @property string $roadNumber
     */
    private $roadNumber = null;

    /**
     * The direction at the reference point in terms of general destination direction.
     *
     * @property string $directionBound
     */
    private $directionBound = null;

    /**
     * The direction at the reference point relative to the sequence direction of the reference points along the road.
     *
     * @property string $directionRelative
     */
    private $directionRelative = null;

    /**
     * The distance in metres from the previous road reference point in the sequence indicated by the direction.
     *
     * @property float $distanceFromPrevious
     */
    private $distanceFromPrevious = null;

    /**
     * The distance in metres to the next road reference point in the sequence indicated by the direction.
     *
     * @property float $distanceToNext
     */
    private $distanceToNext = null;

    /**
     * Identification of whether the reference point is on an elevated section of carriageway or not (true = elevated section). This may distinguish it from a point having coincident latitude / longitude on a carriageway passing beneath the elevated section.
     *
     * @property bool $elevatedRoadSection
     */
    private $elevatedRoadSection = null;

    /**
     * Description of the road reference point.
     *
     * @property \Calcinai\Siri\Objects\Datex\ReferencePointType\ReferencePointDescriptionAType\ValueAType[] $referencePointDescription
     */
    private $referencePointDescription = null;

    /**
     * The distance of the road reference point from the starting point of the sequence on the road.
     *
     * @property float $referencePointDistance
     */
    private $referencePointDistance = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $referencePointExtension
     */
    private $referencePointExtension = null;

    /**
     * Gets as referencePointIdentifier
     *
     * Road reference point identifier, unique on the specified road.
     *
     * @return string
     */
    public function getReferencePointIdentifier()
    {
        return $this->referencePointIdentifier;
    }

    /**
     * Sets a new referencePointIdentifier
     *
     * Road reference point identifier, unique on the specified road.
     *
     * @param string $referencePointIdentifier
     * @return self
     */
    public function setReferencePointIdentifier($referencePointIdentifier)
    {
        $this->referencePointIdentifier = $referencePointIdentifier;
        return $this;
    }

    /**
     * Adds as value
     *
     * Identification of the road administration area which contains the reference point.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\ReferencePointType\AdministrativeAreaAType\ValueAType $value
     */
    public function addToAdministrativeArea(\Calcinai\Siri\Objects\Datex\ReferencePointType\AdministrativeAreaAType\ValueAType $value)
    {
        $this->administrativeArea[] = $value;
        return $this;
    }

    /**
     * isset administrativeArea
     *
     * Identification of the road administration area which contains the reference point.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdministrativeArea($index)
    {
        return isset($this->administrativeArea[$index]);
    }

    /**
     * unset administrativeArea
     *
     * Identification of the road administration area which contains the reference point.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdministrativeArea($index)
    {
        unset($this->administrativeArea[$index]);
    }

    /**
     * Gets as administrativeArea
     *
     * Identification of the road administration area which contains the reference point.
     *
     * @return \Calcinai\Siri\Objects\Datex\ReferencePointType\AdministrativeAreaAType\ValueAType[]
     */
    public function getAdministrativeArea()
    {
        return $this->administrativeArea;
    }

    /**
     * Sets a new administrativeArea
     *
     * Identification of the road administration area which contains the reference point.
     *
     * @param \Calcinai\Siri\Objects\Datex\ReferencePointType\AdministrativeAreaAType\ValueAType[] $administrativeArea
     * @return self
     */
    public function setAdministrativeArea(array $administrativeArea)
    {
        $this->administrativeArea = $administrativeArea;
        return $this;
    }

    /**
     * Adds as value
     *
     * Name of the road on which the reference point is located.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\ReferencePointType\RoadNameAType\ValueAType $value
     */
    public function addToRoadName(\Calcinai\Siri\Objects\Datex\ReferencePointType\RoadNameAType\ValueAType $value)
    {
        $this->roadName[] = $value;
        return $this;
    }

    /**
     * isset roadName
     *
     * Name of the road on which the reference point is located.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoadName($index)
    {
        return isset($this->roadName[$index]);
    }

    /**
     * unset roadName
     *
     * Name of the road on which the reference point is located.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoadName($index)
    {
        unset($this->roadName[$index]);
    }

    /**
     * Gets as roadName
     *
     * Name of the road on which the reference point is located.
     *
     * @return \Calcinai\Siri\Objects\Datex\ReferencePointType\RoadNameAType\ValueAType[]
     */
    public function getRoadName()
    {
        return $this->roadName;
    }

    /**
     * Sets a new roadName
     *
     * Name of the road on which the reference point is located.
     *
     * @param \Calcinai\Siri\Objects\Datex\ReferencePointType\RoadNameAType\ValueAType[] $roadName
     * @return self
     */
    public function setRoadName(array $roadName)
    {
        $this->roadName = $roadName;
        return $this;
    }

    /**
     * Gets as roadNumber
     *
     * Identifier/number of the road on which the reference point is located.
     *
     * @return string
     */
    public function getRoadNumber()
    {
        return $this->roadNumber;
    }

    /**
     * Sets a new roadNumber
     *
     * Identifier/number of the road on which the reference point is located.
     *
     * @param string $roadNumber
     * @return self
     */
    public function setRoadNumber($roadNumber)
    {
        $this->roadNumber = $roadNumber;
        return $this;
    }

    /**
     * Gets as directionBound
     *
     * The direction at the reference point in terms of general destination direction.
     *
     * @return string
     */
    public function getDirectionBound()
    {
        return $this->directionBound;
    }

    /**
     * Sets a new directionBound
     *
     * The direction at the reference point in terms of general destination direction.
     *
     * @param string $directionBound
     * @return self
     */
    public function setDirectionBound($directionBound)
    {
        $this->directionBound = $directionBound;
        return $this;
    }

    /**
     * Gets as directionRelative
     *
     * The direction at the reference point relative to the sequence direction of the reference points along the road.
     *
     * @return string
     */
    public function getDirectionRelative()
    {
        return $this->directionRelative;
    }

    /**
     * Sets a new directionRelative
     *
     * The direction at the reference point relative to the sequence direction of the reference points along the road.
     *
     * @param string $directionRelative
     * @return self
     */
    public function setDirectionRelative($directionRelative)
    {
        $this->directionRelative = $directionRelative;
        return $this;
    }

    /**
     * Gets as distanceFromPrevious
     *
     * The distance in metres from the previous road reference point in the sequence indicated by the direction.
     *
     * @return float
     */
    public function getDistanceFromPrevious()
    {
        return $this->distanceFromPrevious;
    }

    /**
     * Sets a new distanceFromPrevious
     *
     * The distance in metres from the previous road reference point in the sequence indicated by the direction.
     *
     * @param float $distanceFromPrevious
     * @return self
     */
    public function setDistanceFromPrevious($distanceFromPrevious)
    {
        $this->distanceFromPrevious = $distanceFromPrevious;
        return $this;
    }

    /**
     * Gets as distanceToNext
     *
     * The distance in metres to the next road reference point in the sequence indicated by the direction.
     *
     * @return float
     */
    public function getDistanceToNext()
    {
        return $this->distanceToNext;
    }

    /**
     * Sets a new distanceToNext
     *
     * The distance in metres to the next road reference point in the sequence indicated by the direction.
     *
     * @param float $distanceToNext
     * @return self
     */
    public function setDistanceToNext($distanceToNext)
    {
        $this->distanceToNext = $distanceToNext;
        return $this;
    }

    /**
     * Gets as elevatedRoadSection
     *
     * Identification of whether the reference point is on an elevated section of carriageway or not (true = elevated section). This may distinguish it from a point having coincident latitude / longitude on a carriageway passing beneath the elevated section.
     *
     * @return bool
     */
    public function getElevatedRoadSection()
    {
        return $this->elevatedRoadSection;
    }

    /**
     * Sets a new elevatedRoadSection
     *
     * Identification of whether the reference point is on an elevated section of carriageway or not (true = elevated section). This may distinguish it from a point having coincident latitude / longitude on a carriageway passing beneath the elevated section.
     *
     * @param bool $elevatedRoadSection
     * @return self
     */
    public function setElevatedRoadSection($elevatedRoadSection)
    {
        $this->elevatedRoadSection = $elevatedRoadSection;
        return $this;
    }

    /**
     * Adds as value
     *
     * Description of the road reference point.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\ReferencePointType\ReferencePointDescriptionAType\ValueAType $value
     */
    public function addToReferencePointDescription(\Calcinai\Siri\Objects\Datex\ReferencePointType\ReferencePointDescriptionAType\ValueAType $value)
    {
        $this->referencePointDescription[] = $value;
        return $this;
    }

    /**
     * isset referencePointDescription
     *
     * Description of the road reference point.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencePointDescription($index)
    {
        return isset($this->referencePointDescription[$index]);
    }

    /**
     * unset referencePointDescription
     *
     * Description of the road reference point.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencePointDescription($index)
    {
        unset($this->referencePointDescription[$index]);
    }

    /**
     * Gets as referencePointDescription
     *
     * Description of the road reference point.
     *
     * @return \Calcinai\Siri\Objects\Datex\ReferencePointType\ReferencePointDescriptionAType\ValueAType[]
     */
    public function getReferencePointDescription()
    {
        return $this->referencePointDescription;
    }

    /**
     * Sets a new referencePointDescription
     *
     * Description of the road reference point.
     *
     * @param \Calcinai\Siri\Objects\Datex\ReferencePointType\ReferencePointDescriptionAType\ValueAType[] $referencePointDescription
     * @return self
     */
    public function setReferencePointDescription(array $referencePointDescription)
    {
        $this->referencePointDescription = $referencePointDescription;
        return $this;
    }

    /**
     * Gets as referencePointDistance
     *
     * The distance of the road reference point from the starting point of the sequence on the road.
     *
     * @return float
     */
    public function getReferencePointDistance()
    {
        return $this->referencePointDistance;
    }

    /**
     * Sets a new referencePointDistance
     *
     * The distance of the road reference point from the starting point of the sequence on the road.
     *
     * @param float $referencePointDistance
     * @return self
     */
    public function setReferencePointDistance($referencePointDistance)
    {
        $this->referencePointDistance = $referencePointDistance;
        return $this;
    }

    /**
     * Gets as referencePointExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getReferencePointExtension()
    {
        return $this->referencePointExtension;
    }

    /**
     * Sets a new referencePointExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $referencePointExtension
     * @return self
     */
    public function setReferencePointExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $referencePointExtension)
    {
        $this->referencePointExtension = $referencePointExtension;
        return $this;
    }


}

