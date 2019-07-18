<?php

namespace Calcinai\Siri;

/**
 * Class representing SituationExchangePermissions
 *
 * Participant's permissions to use the service.
 */
class SituationExchangePermissions extends PermissionsStructureType
{

    /**
     * @property \Calcinai\Siri\SituationExchangeServicePermissionStructureType[] $situationExchangePermission
     */
    private $situationExchangePermission = [
        
    ];

    /**
     * Adds as situationExchangePermission
     *
     * @return self
     * @param \Calcinai\Siri\SituationExchangeServicePermissionStructureType $situationExchangePermission
     */
    public function addToSituationExchangePermission(\Calcinai\Siri\SituationExchangeServicePermissionStructureType $situationExchangePermission)
    {
        $this->situationExchangePermission[] = $situationExchangePermission;
        return $this;
    }

    /**
     * isset situationExchangePermission
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSituationExchangePermission($index)
    {
        return isset($this->situationExchangePermission[$index]);
    }

    /**
     * unset situationExchangePermission
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSituationExchangePermission($index)
    {
        unset($this->situationExchangePermission[$index]);
    }

    /**
     * Gets as situationExchangePermission
     *
     * @return \Calcinai\Siri\SituationExchangeServicePermissionStructureType[]
     */
    public function getSituationExchangePermission()
    {
        return $this->situationExchangePermission;
    }

    /**
     * Sets a new situationExchangePermission
     *
     * @param \Calcinai\Siri\SituationExchangeServicePermissionStructureType[] $situationExchangePermission
     * @return self
     */
    public function setSituationExchangePermission(array $situationExchangePermission)
    {
        $this->situationExchangePermission = $situationExchangePermission;
        return $this;
    }


}

