<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing PublishToAlertsActionStructureType
 *
 * Type for Action Publish situation To Alert Service.
 * XSD Type: PublishToAlertsActionStructure
 */
class PublishToAlertsActionStructureType extends PushedActionStructureType
{

    /**
     * Send as email alert.
     *
     * @property bool $byEmail
     */
    private $byEmail = null;

    /**
     * Send as mobile alert by SMS or WAP push.
     *
     * @property bool $byMobile
     */
    private $byMobile = null;

    /**
     * Gets as byEmail
     *
     * Send as email alert.
     *
     * @return bool
     */
    public function getByEmail()
    {
        return $this->byEmail;
    }

    /**
     * Sets a new byEmail
     *
     * Send as email alert.
     *
     * @param bool $byEmail
     * @return self
     */
    public function setByEmail($byEmail)
    {
        $this->byEmail = $byEmail;
        return $this;
    }

    /**
     * Gets as byMobile
     *
     * Send as mobile alert by SMS or WAP push.
     *
     * @return bool
     */
    public function getByMobile()
    {
        return $this->byMobile;
    }

    /**
     * Sets a new byMobile
     *
     * Send as mobile alert by SMS or WAP push.
     *
     * @param bool $byMobile
     * @return self
     */
    public function setByMobile($byMobile)
    {
        $this->byMobile = $byMobile;
        return $this;
    }


}

