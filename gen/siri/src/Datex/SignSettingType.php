<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing SignSettingType
 *
 * Provides information on variable message and matrix signs and the information currently displayed.
 * XSD Type: SignSetting
 */
class SignSettingType extends OperatorActionType
{

    /**
     * Indicates the appropriate pictogram taken from the standardised DATEX pictogram list.
     *
     * @property string[] $datexPictogram
     */
    private $datexPictogram = [
        
    ];

    /**
     * Indicates which pictogram list is referenced.
     *
     * @property string $pictogramList
     */
    private $pictogramList = null;

    /**
     * Indicates the chosen pictogram within the pictogram list indicated by the pictogram list entry.
     *
     * @property string[] $pictogramListEntry
     */
    private $pictogramListEntry = [
        
    ];

    /**
     * The reason why the sign has been set.
     *
     * @property \Calcinai\Siri\Datex\SignSettingType\ReasonForSettingAType\ValueAType[] $reasonForSetting
     */
    private $reasonForSetting = null;

    /**
     * The organisation or authority which set the sign.
     *
     * @property \Calcinai\Siri\Datex\SignSettingType\SetByAType\ValueAType[] $setBy
     */
    private $setBy = null;

    /**
     * A reference to indicate the electronic addess to aid identification of the subject sign.
     *
     * @property string $signAddress
     */
    private $signAddress = null;

    /**
     * The date/time at which the sign was last set.
     *
     * @property \DateTime $timeLastSet
     */
    private $timeLastSet = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $signSettingExtension
     */
    private $signSettingExtension = null;

    /**
     * Adds as datexPictogram
     *
     * Indicates the appropriate pictogram taken from the standardised DATEX pictogram list.
     *
     * @return self
     * @param string $datexPictogram
     */
    public function addToDatexPictogram($datexPictogram)
    {
        $this->datexPictogram[] = $datexPictogram;
        return $this;
    }

    /**
     * isset datexPictogram
     *
     * Indicates the appropriate pictogram taken from the standardised DATEX pictogram list.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDatexPictogram($index)
    {
        return isset($this->datexPictogram[$index]);
    }

    /**
     * unset datexPictogram
     *
     * Indicates the appropriate pictogram taken from the standardised DATEX pictogram list.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDatexPictogram($index)
    {
        unset($this->datexPictogram[$index]);
    }

    /**
     * Gets as datexPictogram
     *
     * Indicates the appropriate pictogram taken from the standardised DATEX pictogram list.
     *
     * @return string[]
     */
    public function getDatexPictogram()
    {
        return $this->datexPictogram;
    }

    /**
     * Sets a new datexPictogram
     *
     * Indicates the appropriate pictogram taken from the standardised DATEX pictogram list.
     *
     * @param string $datexPictogram
     * @return self
     */
    public function setDatexPictogram(array $datexPictogram)
    {
        $this->datexPictogram = $datexPictogram;
        return $this;
    }

    /**
     * Gets as pictogramList
     *
     * Indicates which pictogram list is referenced.
     *
     * @return string
     */
    public function getPictogramList()
    {
        return $this->pictogramList;
    }

    /**
     * Sets a new pictogramList
     *
     * Indicates which pictogram list is referenced.
     *
     * @param string $pictogramList
     * @return self
     */
    public function setPictogramList($pictogramList)
    {
        $this->pictogramList = $pictogramList;
        return $this;
    }

    /**
     * Adds as pictogramListEntry
     *
     * Indicates the chosen pictogram within the pictogram list indicated by the pictogram list entry.
     *
     * @return self
     * @param string $pictogramListEntry
     */
    public function addToPictogramListEntry($pictogramListEntry)
    {
        $this->pictogramListEntry[] = $pictogramListEntry;
        return $this;
    }

    /**
     * isset pictogramListEntry
     *
     * Indicates the chosen pictogram within the pictogram list indicated by the pictogram list entry.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictogramListEntry($index)
    {
        return isset($this->pictogramListEntry[$index]);
    }

    /**
     * unset pictogramListEntry
     *
     * Indicates the chosen pictogram within the pictogram list indicated by the pictogram list entry.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictogramListEntry($index)
    {
        unset($this->pictogramListEntry[$index]);
    }

    /**
     * Gets as pictogramListEntry
     *
     * Indicates the chosen pictogram within the pictogram list indicated by the pictogram list entry.
     *
     * @return string[]
     */
    public function getPictogramListEntry()
    {
        return $this->pictogramListEntry;
    }

    /**
     * Sets a new pictogramListEntry
     *
     * Indicates the chosen pictogram within the pictogram list indicated by the pictogram list entry.
     *
     * @param string $pictogramListEntry
     * @return self
     */
    public function setPictogramListEntry(array $pictogramListEntry)
    {
        $this->pictogramListEntry = $pictogramListEntry;
        return $this;
    }

    /**
     * Adds as value
     *
     * The reason why the sign has been set.
     *
     * @return self
     * @param \Calcinai\Siri\Datex\SignSettingType\ReasonForSettingAType\ValueAType $value
     */
    public function addToReasonForSetting(\Calcinai\Siri\Datex\SignSettingType\ReasonForSettingAType\ValueAType $value)
    {
        $this->reasonForSetting[] = $value;
        return $this;
    }

    /**
     * isset reasonForSetting
     *
     * The reason why the sign has been set.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReasonForSetting($index)
    {
        return isset($this->reasonForSetting[$index]);
    }

    /**
     * unset reasonForSetting
     *
     * The reason why the sign has been set.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReasonForSetting($index)
    {
        unset($this->reasonForSetting[$index]);
    }

    /**
     * Gets as reasonForSetting
     *
     * The reason why the sign has been set.
     *
     * @return \Calcinai\Siri\Datex\SignSettingType\ReasonForSettingAType\ValueAType[]
     */
    public function getReasonForSetting()
    {
        return $this->reasonForSetting;
    }

    /**
     * Sets a new reasonForSetting
     *
     * The reason why the sign has been set.
     *
     * @param \Calcinai\Siri\Datex\SignSettingType\ReasonForSettingAType\ValueAType[] $reasonForSetting
     * @return self
     */
    public function setReasonForSetting(array $reasonForSetting)
    {
        $this->reasonForSetting = $reasonForSetting;
        return $this;
    }

    /**
     * Adds as value
     *
     * The organisation or authority which set the sign.
     *
     * @return self
     * @param \Calcinai\Siri\Datex\SignSettingType\SetByAType\ValueAType $value
     */
    public function addToSetBy(\Calcinai\Siri\Datex\SignSettingType\SetByAType\ValueAType $value)
    {
        $this->setBy[] = $value;
        return $this;
    }

    /**
     * isset setBy
     *
     * The organisation or authority which set the sign.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSetBy($index)
    {
        return isset($this->setBy[$index]);
    }

    /**
     * unset setBy
     *
     * The organisation or authority which set the sign.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSetBy($index)
    {
        unset($this->setBy[$index]);
    }

    /**
     * Gets as setBy
     *
     * The organisation or authority which set the sign.
     *
     * @return \Calcinai\Siri\Datex\SignSettingType\SetByAType\ValueAType[]
     */
    public function getSetBy()
    {
        return $this->setBy;
    }

    /**
     * Sets a new setBy
     *
     * The organisation or authority which set the sign.
     *
     * @param \Calcinai\Siri\Datex\SignSettingType\SetByAType\ValueAType[] $setBy
     * @return self
     */
    public function setSetBy(array $setBy)
    {
        $this->setBy = $setBy;
        return $this;
    }

    /**
     * Gets as signAddress
     *
     * A reference to indicate the electronic addess to aid identification of the subject sign.
     *
     * @return string
     */
    public function getSignAddress()
    {
        return $this->signAddress;
    }

    /**
     * Sets a new signAddress
     *
     * A reference to indicate the electronic addess to aid identification of the subject sign.
     *
     * @param string $signAddress
     * @return self
     */
    public function setSignAddress($signAddress)
    {
        $this->signAddress = $signAddress;
        return $this;
    }

    /**
     * Gets as timeLastSet
     *
     * The date/time at which the sign was last set.
     *
     * @return \DateTime
     */
    public function getTimeLastSet()
    {
        return $this->timeLastSet;
    }

    /**
     * Sets a new timeLastSet
     *
     * The date/time at which the sign was last set.
     *
     * @param \DateTime $timeLastSet
     * @return self
     */
    public function setTimeLastSet(\DateTime $timeLastSet)
    {
        $this->timeLastSet = $timeLastSet;
        return $this;
    }

    /**
     * Gets as signSettingExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getSignSettingExtension()
    {
        return $this->signSettingExtension;
    }

    /**
     * Sets a new signSettingExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $signSettingExtension
     * @return self
     */
    public function setSignSettingExtension(\Calcinai\Siri\Datex\ExtensionType $signSettingExtension)
    {
        $this->signSettingExtension = $signSettingExtension;
        return $this;
    }


}

