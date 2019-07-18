<?php

namespace Calcinai\Siri;

/**
 * Class representing InfoChannelStructureType
 *
 * Type for Info Channels description.
 * XSD Type: InfoChannelStructure
 */
class InfoChannelStructureType
{

    /**
     * Identifier of classification.
     *
     * @property string $infoChannelCode
     */
    private $infoChannelCode = null;

    /**
     * Name of Info Channel.
     *
     * @property \Calcinai\Siri\NaturalLanguageStringStructureType $name
     */
    private $name = null;

    /**
     * Icon associated with Info Channel.
     *
     * @property string $icon
     */
    private $icon = null;

    /**
     * Gets as infoChannelCode
     *
     * Identifier of classification.
     *
     * @return string
     */
    public function getInfoChannelCode()
    {
        return $this->infoChannelCode;
    }

    /**
     * Sets a new infoChannelCode
     *
     * Identifier of classification.
     *
     * @param string $infoChannelCode
     * @return self
     */
    public function setInfoChannelCode($infoChannelCode)
    {
        $this->infoChannelCode = $infoChannelCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * Name of Info Channel.
     *
     * @return \Calcinai\Siri\NaturalLanguageStringStructureType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of Info Channel.
     *
     * @param \Calcinai\Siri\NaturalLanguageStringStructureType $name
     * @return self
     */
    public function setName(\Calcinai\Siri\NaturalLanguageStringStructureType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as icon
     *
     * Icon associated with Info Channel.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Sets a new icon
     *
     * Icon associated with Info Channel.
     *
     * @param string $icon
     * @return self
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }


}

