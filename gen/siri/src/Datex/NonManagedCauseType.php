<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing NonManagedCauseType
 *
 * Contains details of the cause of a record within a situation, when this cause is not managed as a situation record in its own right.
 * XSD Type: NonManagedCause
 */
class NonManagedCauseType extends CauseType
{

    /**
     * Description of a cause which is not managed by the operator (e.g. an off network cause).
     *
     * @property \Calcinai\Siri\Datex\NonManagedCauseType\CauseDescriptionAType\ValueAType[] $causeDescription
     */
    private $causeDescription = null;

    /**
     * Indicates an external influence that may be the causation of components of a situation.
     *
     * @property string $causeType
     */
    private $causeType = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $nonManagedCauseExtension
     */
    private $nonManagedCauseExtension = null;

    /**
     * Adds as value
     *
     * Description of a cause which is not managed by the operator (e.g. an off network cause).
     *
     * @return self
     * @param \Calcinai\Siri\Datex\NonManagedCauseType\CauseDescriptionAType\ValueAType $value
     */
    public function addToCauseDescription(\Calcinai\Siri\Datex\NonManagedCauseType\CauseDescriptionAType\ValueAType $value)
    {
        $this->causeDescription[] = $value;
        return $this;
    }

    /**
     * isset causeDescription
     *
     * Description of a cause which is not managed by the operator (e.g. an off network cause).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCauseDescription($index)
    {
        return isset($this->causeDescription[$index]);
    }

    /**
     * unset causeDescription
     *
     * Description of a cause which is not managed by the operator (e.g. an off network cause).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCauseDescription($index)
    {
        unset($this->causeDescription[$index]);
    }

    /**
     * Gets as causeDescription
     *
     * Description of a cause which is not managed by the operator (e.g. an off network cause).
     *
     * @return \Calcinai\Siri\Datex\NonManagedCauseType\CauseDescriptionAType\ValueAType[]
     */
    public function getCauseDescription()
    {
        return $this->causeDescription;
    }

    /**
     * Sets a new causeDescription
     *
     * Description of a cause which is not managed by the operator (e.g. an off network cause).
     *
     * @param \Calcinai\Siri\Datex\NonManagedCauseType\CauseDescriptionAType\ValueAType[] $causeDescription
     * @return self
     */
    public function setCauseDescription(array $causeDescription)
    {
        $this->causeDescription = $causeDescription;
        return $this;
    }

    /**
     * Gets as causeType
     *
     * Indicates an external influence that may be the causation of components of a situation.
     *
     * @return string
     */
    public function getCauseType()
    {
        return $this->causeType;
    }

    /**
     * Sets a new causeType
     *
     * Indicates an external influence that may be the causation of components of a situation.
     *
     * @param string $causeType
     * @return self
     */
    public function setCauseType($causeType)
    {
        $this->causeType = $causeType;
        return $this;
    }

    /**
     * Gets as nonManagedCauseExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getNonManagedCauseExtension()
    {
        return $this->nonManagedCauseExtension;
    }

    /**
     * Sets a new nonManagedCauseExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $nonManagedCauseExtension
     * @return self
     */
    public function setNonManagedCauseExtension(\Calcinai\Siri\Datex\ExtensionType $nonManagedCauseExtension)
    {
        $this->nonManagedCauseExtension = $nonManagedCauseExtension;
        return $this;
    }


}

