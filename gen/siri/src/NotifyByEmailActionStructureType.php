<?php

namespace Calcinai\Siri;

/**
 * Class representing NotifyByEmailActionStructureType
 *
 * ype for Notify user by Email.
 * XSD Type: NotifyByEmailActionStructure
 */
class NotifyByEmailActionStructureType extends PushedActionStructureType
{

    /**
     * Email address to which notice should be sent.
     *
     * @property string $email
     */
    private $email = null;

    /**
     * Gets as email
     *
     * Email address to which notice should be sent.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email address to which notice should be sent.
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


}

