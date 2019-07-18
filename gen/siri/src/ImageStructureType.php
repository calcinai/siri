<?php

namespace Calcinai\Siri;

/**
 * Class representing ImageStructureType
 *
 * Type for image
 * XSD Type: ImageStructure
 */
class ImageStructureType
{

    /**
     * Reference to an image
     *
     * @property string $imageRef
     */
    private $imageRef = null;

    /**
     * Embedded image.
     *
     * @property mixed $imageBinary
     */
    private $imageBinary = null;

    /**
     * Categorisation of image content.
     *
     * @property string $imageContent
     */
    private $imageContent = null;

    /**
     * Gets as imageRef
     *
     * Reference to an image
     *
     * @return string
     */
    public function getImageRef()
    {
        return $this->imageRef;
    }

    /**
     * Sets a new imageRef
     *
     * Reference to an image
     *
     * @param string $imageRef
     * @return self
     */
    public function setImageRef($imageRef)
    {
        $this->imageRef = $imageRef;
        return $this;
    }

    /**
     * Gets as imageBinary
     *
     * Embedded image.
     *
     * @return mixed
     */
    public function getImageBinary()
    {
        return $this->imageBinary;
    }

    /**
     * Sets a new imageBinary
     *
     * Embedded image.
     *
     * @param mixed $imageBinary
     * @return self
     */
    public function setImageBinary($imageBinary)
    {
        $this->imageBinary = $imageBinary;
        return $this;
    }

    /**
     * Gets as imageContent
     *
     * Categorisation of image content.
     *
     * @return string
     */
    public function getImageContent()
    {
        return $this->imageContent;
    }

    /**
     * Sets a new imageContent
     *
     * Categorisation of image content.
     *
     * @param string $imageContent
     * @return self
     */
    public function setImageContent($imageContent)
    {
        $this->imageContent = $imageContent;
        return $this;
    }


}

