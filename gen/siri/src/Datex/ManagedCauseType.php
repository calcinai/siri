<?php

namespace Calcinai\Siri\Datex;

/**
 * Class representing ManagedCauseType
 *
 * Contains a reference to another situation record which defines a cause of the event defined here.
 * XSD Type: ManagedCause
 */
class ManagedCauseType extends CauseType
{

    /**
     * A reference to another situation record which defines a cause of the event defined here.
     *
     * @property string $managedCause
     */
    private $managedCause = null;

    /**
     * @property \Calcinai\Siri\Datex\ExtensionType $managedCauseExtension
     */
    private $managedCauseExtension = null;

    /**
     * Gets as managedCause
     *
     * A reference to another situation record which defines a cause of the event defined here.
     *
     * @return string
     */
    public function getManagedCause()
    {
        return $this->managedCause;
    }

    /**
     * Sets a new managedCause
     *
     * A reference to another situation record which defines a cause of the event defined here.
     *
     * @param string $managedCause
     * @return self
     */
    public function setManagedCause($managedCause)
    {
        $this->managedCause = $managedCause;
        return $this;
    }

    /**
     * Gets as managedCauseExtension
     *
     * @return \Calcinai\Siri\Datex\ExtensionType
     */
    public function getManagedCauseExtension()
    {
        return $this->managedCauseExtension;
    }

    /**
     * Sets a new managedCauseExtension
     *
     * @param \Calcinai\Siri\Datex\ExtensionType $managedCauseExtension
     * @return self
     */
    public function setManagedCauseExtension(\Calcinai\Siri\Datex\ExtensionType $managedCauseExtension)
    {
        $this->managedCauseExtension = $managedCauseExtension;
        return $this;
    }


}

