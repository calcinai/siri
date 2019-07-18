<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing InfoMessageStructureType
 *
 * Type for an Info Message. @formatRef.
 * XSD Type: InfoMessageStructure
 */
class InfoMessageStructureType extends AbstractIdentifiedItemStructureType
{

    /**
     * Identifies the format of the Content. If absent, free text.
     *
     * @property mixed $formatRef
     */
    private $formatRef = null;

    /**
     * Unique identifier of message.
     *
     * @property string $infoMessageIdentifier
     */
    private $infoMessageIdentifier = null;

    /**
     * Optional version number of update to previosu message
     *
     * @property int $infoMessageVersion
     */
    private $infoMessageVersion = null;

    /**
     * Info Channel to which message belongs.
     *
     * @property string $infoChannelRef
     */
    private $infoChannelRef = null;

    /**
     * Time until which message is valid. If absent unopen ended.
     *
     * @property \DateTime $validUntilTime
     */
    private $validUntilTime = null;

    /**
     * @property \Calcinai\Siri\Objects\SituationRef $situationRef
     */
    private $situationRef = null;

    /**
     * Message Content. Format is specified by Format Ref.
     *
     * @property mixed $content
     */
    private $content = null;

    /**
     * Gets as formatRef
     *
     * Identifies the format of the Content. If absent, free text.
     *
     * @return mixed
     */
    public function getFormatRef()
    {
        return $this->formatRef;
    }

    /**
     * Sets a new formatRef
     *
     * Identifies the format of the Content. If absent, free text.
     *
     * @param mixed $formatRef
     * @return self
     */
    public function setFormatRef($formatRef)
    {
        $this->formatRef = $formatRef;
        return $this;
    }

    /**
     * Gets as infoMessageIdentifier
     *
     * Unique identifier of message.
     *
     * @return string
     */
    public function getInfoMessageIdentifier()
    {
        return $this->infoMessageIdentifier;
    }

    /**
     * Sets a new infoMessageIdentifier
     *
     * Unique identifier of message.
     *
     * @param string $infoMessageIdentifier
     * @return self
     */
    public function setInfoMessageIdentifier($infoMessageIdentifier)
    {
        $this->infoMessageIdentifier = $infoMessageIdentifier;
        return $this;
    }

    /**
     * Gets as infoMessageVersion
     *
     * Optional version number of update to previosu message
     *
     * @return int
     */
    public function getInfoMessageVersion()
    {
        return $this->infoMessageVersion;
    }

    /**
     * Sets a new infoMessageVersion
     *
     * Optional version number of update to previosu message
     *
     * @param int $infoMessageVersion
     * @return self
     */
    public function setInfoMessageVersion($infoMessageVersion)
    {
        $this->infoMessageVersion = $infoMessageVersion;
        return $this;
    }

    /**
     * Gets as infoChannelRef
     *
     * Info Channel to which message belongs.
     *
     * @return string
     */
    public function getInfoChannelRef()
    {
        return $this->infoChannelRef;
    }

    /**
     * Sets a new infoChannelRef
     *
     * Info Channel to which message belongs.
     *
     * @param string $infoChannelRef
     * @return self
     */
    public function setInfoChannelRef($infoChannelRef)
    {
        $this->infoChannelRef = $infoChannelRef;
        return $this;
    }

    /**
     * Gets as validUntilTime
     *
     * Time until which message is valid. If absent unopen ended.
     *
     * @return \DateTime
     */
    public function getValidUntilTime()
    {
        return $this->validUntilTime;
    }

    /**
     * Sets a new validUntilTime
     *
     * Time until which message is valid. If absent unopen ended.
     *
     * @param \DateTime $validUntilTime
     * @return self
     */
    public function setValidUntilTime(\DateTime $validUntilTime)
    {
        $this->validUntilTime = $validUntilTime;
        return $this;
    }

    /**
     * Gets as situationRef
     *
     * @return \Calcinai\Siri\Objects\SituationRef
     */
    public function getSituationRef()
    {
        return $this->situationRef;
    }

    /**
     * Sets a new situationRef
     *
     * @param \Calcinai\Siri\Objects\SituationRef $situationRef
     * @return self
     */
    public function setSituationRef(\Calcinai\Siri\Objects\SituationRef $situationRef)
    {
        $this->situationRef = $situationRef;
        return $this;
    }

    /**
     * Gets as content
     *
     * Message Content. Format is specified by Format Ref.
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * Message Content. Format is specified by Format Ref.
     *
     * @param mixed $content
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }


}

