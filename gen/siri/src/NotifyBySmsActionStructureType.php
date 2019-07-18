<?php

namespace Calcinai\Siri\Objects;

/**
 * Class representing NotifyBySmsActionStructureType
 *
 * Type for Notify user by SMS.
 * XSD Type: NotifyBySmsActionStructure
 */
class NotifyBySmsActionStructureType extends PushedActionStructureType
{

    /**
     * MSISDN of user to which to send messages.
     *
     * @property string $phone
     */
    private $phone = null;

    /**
     * Whether content is flagged as subject to premium charge.
     *
     * @property bool $premium
     */
    private $premium = null;

    /**
     * Gets as phone
     *
     * MSISDN of user to which to send messages.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * MSISDN of user to which to send messages.
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as premium
     *
     * Whether content is flagged as subject to premium charge.
     *
     * @return bool
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * Sets a new premium
     *
     * Whether content is flagged as subject to premium charge.
     *
     * @param bool $premium
     * @return self
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;
        return $this;
    }


}

