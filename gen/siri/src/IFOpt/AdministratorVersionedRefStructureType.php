<?php

namespace Calcinai\Siri\Objects\IFOpt;

/**
 * Class representing AdministratorVersionedRefStructureType
 *
 * Type for aA versioned reference to an Administrator.
 * XSD Type: AdministratorVersionedRefStructure
 */
class AdministratorVersionedRefStructureType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property \DateTime $created
     */
    private $created = null;

    /**
     * @property \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * @property string $modification
     */
    private $modification = null;

    /**
     * @property int $version
     */
    private $version = null;

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * @param \DateTime $created
     * @return self
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as lastUpdated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Gets as modification
     *
     * @return string
     */
    public function getModification()
    {
        return $this->modification;
    }

    /**
     * Sets a new modification
     *
     * @param string $modification
     * @return self
     */
    public function setModification($modification)
    {
        $this->modification = $modification;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param int $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


}

