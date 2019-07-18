<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing VariableMessageSignSettingType
 *
 * Details of a variable message sign and its displayed information.
 * XSD Type: VariableMessageSignSetting
 */
class VariableMessageSignSettingType extends SignSettingType
{

    /**
     * The maximum number of characters in each row on the variable message sign (for fixed font signs).
     *
     * @property int $numberOfCharacters
     */
    private $numberOfCharacters = null;

    /**
     * The maximum number of rows of characters on the variable message sign (for fixed font signs).
     *
     * @property int $numberOfRows
     */
    private $numberOfRows = null;

    /**
     * Indicates the type of fault which is being recorded for the specified variable message sign.
     *
     * @property string[] $vmsFault
     */
    private $vmsFault = [
        
    ];

    /**
     * A reference to aid identification of the subject Variable Message Sign.
     *
     * @property string $vmsIdentifier
     */
    private $vmsIdentifier = null;

    /**
     * A free-text field containing a single displayed legend row on the specific variable message sign.
     *
     * @property string[] $vmsLegend
     */
    private $vmsLegend = [
        
    ];

    /**
     * Indicates the display characteristics of the specific variable message sign.
     *
     * @property string $vmsType
     */
    private $vmsType = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $variableMessageSignSettingExtension
     */
    private $variableMessageSignSettingExtension = null;

    /**
     * Gets as numberOfCharacters
     *
     * The maximum number of characters in each row on the variable message sign (for fixed font signs).
     *
     * @return int
     */
    public function getNumberOfCharacters()
    {
        return $this->numberOfCharacters;
    }

    /**
     * Sets a new numberOfCharacters
     *
     * The maximum number of characters in each row on the variable message sign (for fixed font signs).
     *
     * @param int $numberOfCharacters
     * @return self
     */
    public function setNumberOfCharacters($numberOfCharacters)
    {
        $this->numberOfCharacters = $numberOfCharacters;
        return $this;
    }

    /**
     * Gets as numberOfRows
     *
     * The maximum number of rows of characters on the variable message sign (for fixed font signs).
     *
     * @return int
     */
    public function getNumberOfRows()
    {
        return $this->numberOfRows;
    }

    /**
     * Sets a new numberOfRows
     *
     * The maximum number of rows of characters on the variable message sign (for fixed font signs).
     *
     * @param int $numberOfRows
     * @return self
     */
    public function setNumberOfRows($numberOfRows)
    {
        $this->numberOfRows = $numberOfRows;
        return $this;
    }

    /**
     * Adds as vmsFault
     *
     * Indicates the type of fault which is being recorded for the specified variable message sign.
     *
     * @return self
     * @param string $vmsFault
     */
    public function addToVmsFault($vmsFault)
    {
        $this->vmsFault[] = $vmsFault;
        return $this;
    }

    /**
     * isset vmsFault
     *
     * Indicates the type of fault which is being recorded for the specified variable message sign.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVmsFault($index)
    {
        return isset($this->vmsFault[$index]);
    }

    /**
     * unset vmsFault
     *
     * Indicates the type of fault which is being recorded for the specified variable message sign.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVmsFault($index)
    {
        unset($this->vmsFault[$index]);
    }

    /**
     * Gets as vmsFault
     *
     * Indicates the type of fault which is being recorded for the specified variable message sign.
     *
     * @return string[]
     */
    public function getVmsFault()
    {
        return $this->vmsFault;
    }

    /**
     * Sets a new vmsFault
     *
     * Indicates the type of fault which is being recorded for the specified variable message sign.
     *
     * @param string $vmsFault
     * @return self
     */
    public function setVmsFault(array $vmsFault)
    {
        $this->vmsFault = $vmsFault;
        return $this;
    }

    /**
     * Gets as vmsIdentifier
     *
     * A reference to aid identification of the subject Variable Message Sign.
     *
     * @return string
     */
    public function getVmsIdentifier()
    {
        return $this->vmsIdentifier;
    }

    /**
     * Sets a new vmsIdentifier
     *
     * A reference to aid identification of the subject Variable Message Sign.
     *
     * @param string $vmsIdentifier
     * @return self
     */
    public function setVmsIdentifier($vmsIdentifier)
    {
        $this->vmsIdentifier = $vmsIdentifier;
        return $this;
    }

    /**
     * Adds as vmsLegend
     *
     * A free-text field containing a single displayed legend row on the specific variable message sign.
     *
     * @return self
     * @param string $vmsLegend
     */
    public function addToVmsLegend($vmsLegend)
    {
        $this->vmsLegend[] = $vmsLegend;
        return $this;
    }

    /**
     * isset vmsLegend
     *
     * A free-text field containing a single displayed legend row on the specific variable message sign.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVmsLegend($index)
    {
        return isset($this->vmsLegend[$index]);
    }

    /**
     * unset vmsLegend
     *
     * A free-text field containing a single displayed legend row on the specific variable message sign.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVmsLegend($index)
    {
        unset($this->vmsLegend[$index]);
    }

    /**
     * Gets as vmsLegend
     *
     * A free-text field containing a single displayed legend row on the specific variable message sign.
     *
     * @return string[]
     */
    public function getVmsLegend()
    {
        return $this->vmsLegend;
    }

    /**
     * Sets a new vmsLegend
     *
     * A free-text field containing a single displayed legend row on the specific variable message sign.
     *
     * @param string $vmsLegend
     * @return self
     */
    public function setVmsLegend(array $vmsLegend)
    {
        $this->vmsLegend = $vmsLegend;
        return $this;
    }

    /**
     * Gets as vmsType
     *
     * Indicates the display characteristics of the specific variable message sign.
     *
     * @return string
     */
    public function getVmsType()
    {
        return $this->vmsType;
    }

    /**
     * Sets a new vmsType
     *
     * Indicates the display characteristics of the specific variable message sign.
     *
     * @param string $vmsType
     * @return self
     */
    public function setVmsType($vmsType)
    {
        $this->vmsType = $vmsType;
        return $this;
    }

    /**
     * Gets as variableMessageSignSettingExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getVariableMessageSignSettingExtension()
    {
        return $this->variableMessageSignSettingExtension;
    }

    /**
     * Sets a new variableMessageSignSettingExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $variableMessageSignSettingExtension
     * @return self
     */
    public function setVariableMessageSignSettingExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $variableMessageSignSettingExtension)
    {
        $this->variableMessageSignSettingExtension = $variableMessageSignSettingExtension;
        return $this;
    }


}

