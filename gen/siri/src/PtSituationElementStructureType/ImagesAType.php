<?php

namespace Calcinai\Siri\Objects\PtSituationElementStructureType;

/**
 * Class representing ImagesAType
 */
class ImagesAType
{

    /**
     * Image description.
     *
     * @property \Calcinai\Siri\Objects\PtSituationElementStructureType\ImagesAType\ImageAType[] $image
     */
    private $image = [
        
    ];

    /**
     * Adds as image
     *
     * Image description.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\PtSituationElementStructureType\ImagesAType\ImageAType $image
     */
    public function addToImage(\Calcinai\Siri\Objects\PtSituationElementStructureType\ImagesAType\ImageAType $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * Image description.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImage($index)
    {
        return isset($this->image[$index]);
    }

    /**
     * unset image
     *
     * Image description.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImage($index)
    {
        unset($this->image[$index]);
    }

    /**
     * Gets as image
     *
     * Image description.
     *
     * @return \Calcinai\Siri\Objects\PtSituationElementStructureType\ImagesAType\ImageAType[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * Image description.
     *
     * @param \Calcinai\Siri\Objects\PtSituationElementStructureType\ImagesAType\ImageAType[] $image
     * @return self
     */
    public function setImage(array $image)
    {
        $this->image = $image;
        return $this;
    }


}

