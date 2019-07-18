<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing InfoLinkStructureType
 *
 * Type for a general hyperlink.
 * XSD Type: InfoLinkStructure
 */
class InfoLinkStructureType
{

    /**
     * URI for link.
     *
     * @property string $uri
     */
    private $uri = null;

    /**
     * Label for Link
     *
     * @property \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $label
     */
    private $label = null;

    /**
     * Image to use when presenting hyperlink
     *
     * @property \Calcinai\Siri\Objects\ImageStructureType $image
     */
    private $image = null;

    /**
     * Categorisation of link content.
     *
     * @property string $linkContent
     */
    private $linkContent = null;

    /**
     * Gets as uri
     *
     * URI for link.
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * URI for link.
     *
     * @param string $uri
     * @return self
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Gets as label
     *
     * Label for Link
     *
     * @return \Calcinai\Siri\Objects\NaturalLanguageStringStructureType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * Label for Link
     *
     * @param \Calcinai\Siri\Objects\NaturalLanguageStringStructureType $label
     * @return self
     */
    public function setLabel(\Calcinai\Siri\Objects\NaturalLanguageStringStructureType $label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as image
     *
     * Image to use when presenting hyperlink
     *
     * @return \Calcinai\Siri\Objects\ImageStructureType
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * Image to use when presenting hyperlink
     *
     * @param \Calcinai\Siri\Objects\ImageStructureType $image
     * @return self
     */
    public function setImage(\Calcinai\Siri\Objects\ImageStructureType $image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Gets as linkContent
     *
     * Categorisation of link content.
     *
     * @return string
     */
    public function getLinkContent()
    {
        return $this->linkContent;
    }

    /**
     * Sets a new linkContent
     *
     * Categorisation of link content.
     *
     * @param string $linkContent
     * @return self
     */
    public function setLinkContent($linkContent)
    {
        $this->linkContent = $linkContent;
        return $this;
    }


}

