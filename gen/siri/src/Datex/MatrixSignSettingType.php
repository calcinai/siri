<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing MatrixSignSettingType
 *
 * Details of a matrix sign and its displayed aspect.
 * XSD Type: MatrixSignSetting
 */
class MatrixSignSettingType extends SignSettingType
{

    /**
     * Indicates which sign aspect (face) is being displayed.
     *
     * @property string $aspectDisplayed
     */
    private $aspectDisplayed = null;

    /**
     * Indicates the type of fault which is being recorded for the specified matrix sign.
     *
     * @property string[] $matrixFault
     */
    private $matrixFault = [
        
    ];

    /**
     * A reference to aid identification of the subject matrix sign.
     *
     * @property string $matrixIdentifier
     */
    private $matrixIdentifier = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $matrixSignSettingExtension
     */
    private $matrixSignSettingExtension = null;

    /**
     * Gets as aspectDisplayed
     *
     * Indicates which sign aspect (face) is being displayed.
     *
     * @return string
     */
    public function getAspectDisplayed()
    {
        return $this->aspectDisplayed;
    }

    /**
     * Sets a new aspectDisplayed
     *
     * Indicates which sign aspect (face) is being displayed.
     *
     * @param string $aspectDisplayed
     * @return self
     */
    public function setAspectDisplayed($aspectDisplayed)
    {
        $this->aspectDisplayed = $aspectDisplayed;
        return $this;
    }

    /**
     * Adds as matrixFault
     *
     * Indicates the type of fault which is being recorded for the specified matrix sign.
     *
     * @return self
     * @param string $matrixFault
     */
    public function addToMatrixFault($matrixFault)
    {
        $this->matrixFault[] = $matrixFault;
        return $this;
    }

    /**
     * isset matrixFault
     *
     * Indicates the type of fault which is being recorded for the specified matrix sign.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMatrixFault($index)
    {
        return isset($this->matrixFault[$index]);
    }

    /**
     * unset matrixFault
     *
     * Indicates the type of fault which is being recorded for the specified matrix sign.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMatrixFault($index)
    {
        unset($this->matrixFault[$index]);
    }

    /**
     * Gets as matrixFault
     *
     * Indicates the type of fault which is being recorded for the specified matrix sign.
     *
     * @return string[]
     */
    public function getMatrixFault()
    {
        return $this->matrixFault;
    }

    /**
     * Sets a new matrixFault
     *
     * Indicates the type of fault which is being recorded for the specified matrix sign.
     *
     * @param string $matrixFault
     * @return self
     */
    public function setMatrixFault(array $matrixFault)
    {
        $this->matrixFault = $matrixFault;
        return $this;
    }

    /**
     * Gets as matrixIdentifier
     *
     * A reference to aid identification of the subject matrix sign.
     *
     * @return string
     */
    public function getMatrixIdentifier()
    {
        return $this->matrixIdentifier;
    }

    /**
     * Sets a new matrixIdentifier
     *
     * A reference to aid identification of the subject matrix sign.
     *
     * @param string $matrixIdentifier
     * @return self
     */
    public function setMatrixIdentifier($matrixIdentifier)
    {
        $this->matrixIdentifier = $matrixIdentifier;
        return $this;
    }

    /**
     * Gets as matrixSignSettingExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getMatrixSignSettingExtension()
    {
        return $this->matrixSignSettingExtension;
    }

    /**
     * Sets a new matrixSignSettingExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $matrixSignSettingExtension
     * @return self
     */
    public function setMatrixSignSettingExtension(\Calcinai\Siri\Datex\ExtensionType $matrixSignSettingExtension)
    {
        $this->matrixSignSettingExtension = $matrixSignSettingExtension;
        return $this;
    }


}

