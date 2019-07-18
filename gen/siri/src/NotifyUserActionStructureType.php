<?php

namespace Calcinai\Siri;

/**
 * Class representing NotifyUserActionStructureType
 *
 * Type for Notify user by other means.
 * XSD Type: NotifyUserActionStructure
 */
class NotifyUserActionStructureType extends PushedActionStructureType
{

    /**
     * Workgroup of user to be notified.
     *
     * @property string $workgroupRef
     */
    private $workgroupRef = null;

    /**
     * Name of user to be notified.
     *
     * @property string $userName
     */
    private $userName = null;

    /**
     * Identifier of user to be notified.
     *
     * @property string $userRef
     */
    private $userRef = null;

    /**
     * Gets as workgroupRef
     *
     * Workgroup of user to be notified.
     *
     * @return string
     */
    public function getWorkgroupRef()
    {
        return $this->workgroupRef;
    }

    /**
     * Sets a new workgroupRef
     *
     * Workgroup of user to be notified.
     *
     * @param string $workgroupRef
     * @return self
     */
    public function setWorkgroupRef($workgroupRef)
    {
        $this->workgroupRef = $workgroupRef;
        return $this;
    }

    /**
     * Gets as userName
     *
     * Name of user to be notified.
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets a new userName
     *
     * Name of user to be notified.
     *
     * @param string $userName
     * @return self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Gets as userRef
     *
     * Identifier of user to be notified.
     *
     * @return string
     */
    public function getUserRef()
    {
        return $this->userRef;
    }

    /**
     * Sets a new userRef
     *
     * Identifier of user to be notified.
     *
     * @param string $userRef
     * @return self
     */
    public function setUserRef($userRef)
    {
        $this->userRef = $userRef;
        return $this;
    }


}

